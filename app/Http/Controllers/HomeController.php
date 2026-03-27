<?php

namespace App\Http\Controllers;

use App\Models\Medic;
use App\Models\Pacient;
use App\Models\Medicament;
use App\Models\Programare;
use App\Models\Consultatie;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'medici' => Medic::all(),
            'pacienti' => Pacient::all(),
            'medicamente' => Medicament::all(),
            'programari' => Programare::with(['medic', 'pacient'])->get(),
            'consultatii' => Consultatie::with(['pacient', 'medicament'])->get(),
        ]);
    }
}
