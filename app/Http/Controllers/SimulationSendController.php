<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SimulationRequest;

class SimulationSendController extends Controller
{
    public function index(SimulationRequest $request)
    {
        $tab = $request->validated();
        dd($tab);
    }
}
