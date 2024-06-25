<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SimulationRequest;
use Illuminate\Support\Facades\DB;

class SimulationSendController extends Controller
{
    public function index(SimulationRequest $request)
    {
        $tab = $request->validated();
        if ($tab)
        {
            $tab["travaux"] = $tab["travaux"][1];
            DB::table('simulation')->insert($tab);
        }
    }
}
