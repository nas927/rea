<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ActualiteFormController extends Controller
{
    public function index($id): View
    {
        return view('actu');
    }
}
