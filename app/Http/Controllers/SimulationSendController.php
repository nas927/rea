<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulationSendController extends Controller
{
    public function index(Request $req)
    {
        dd($req->hey);
    }
}
