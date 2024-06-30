<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class UnsubscribeController extends Controller
{
    public function index($hash): RedirectResponse
    {
        $this->hashed = DB::table('contact')->where('hash', $hash)->first();
        if ($this->hashed->id)
        {
            DB::table('contact')->where('hash', $hash)->update(['enable' => DB::raw('NOT enable')]);
            if ($this->hashed->enable)
                $message = "Vous avez bien été désinscrit !";
            else
                $message = "Vous avez bien été réinscrit !";
            return redirect()->route('index')->with('success', [$message]);
        }
       // return redirect()->route('index');
    }
}
