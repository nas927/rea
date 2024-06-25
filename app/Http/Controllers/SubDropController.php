<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class SubDropController extends Controller
{
    public function index($url): View | RedirectResponse
    {
        $subdrop = DB::table('subdrop')->where("url", "=", $url)->get();
        if ($subdrop->isEmpty() != true)
            return view('subdrop', ["all" => $subdrop[0]]);
        else
            return redirect()->route('index')->with('error', ['Vous ne pouvez pas accéder à cette page pour le moment !']);
    }
}
