<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\QueryException;

class ContactController extends Controller
{
    public function index(ContactRequest $request)
    {
        if ($request->validated())
        {
            $tab = $request->validated();
            $tab["visiteur"] = $request->ip();
            $tab["hash"] = mt_rand(4000, 100000000);
            try {
                DB::table('contact')->insert($tab);
                Mail::to($tab['email'])->send(new ContactMail($tab["hash"], "Vous avez bien été inscrit à la newsletter", 'SOUSCRIPTION'));
            }
            catch (QueryException $e)
            {
                abort(500, 'Erreur interne du serveur.');
            }
        }
        return "email envoyé !";
    }
}
