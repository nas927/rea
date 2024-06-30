<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\QueryException;

class ContactFormController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }
    
    public function sent(ContactFormRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        if ($validated)
        {
            date_default_timezone_set('Europe/Paris');
            $tab = $validated;
            $tab["visiteur"] = $request->ip();
            $tab["created_at"] = date("Y-m-d H:i:s");
            try {
                DB::table('contact-form')->insert($tab);
                Mail::to($tab['email'])->send(new ContactMail('', 'Nous avons bien reçu votre message', 'FORMULAIRE'));
            }
            catch (QueryException $e)
            {
                return redirect()->route('contact')->withErrors('Une erreur est survenu !');
            }
            return redirect()->route('index')->with('success', ['Votre message a bien été envoyé !']);
        }
    }
}
