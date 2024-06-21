<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SimulationPageController extends Controller
{
    public function index($index): View
    {
        return view('simulation-page.page'.$index);
    }
}
