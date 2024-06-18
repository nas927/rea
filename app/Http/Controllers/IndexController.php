<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        $header = ['Isolation', 'Chauffage', 'Solaire', 'Rénovation 
        globale', 'Aides 
        et Primes', 'Actualités'];
        return view('welcome', 
        ['header' => $header]
        );
    }
}
