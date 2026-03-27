<?php

namespace App\Http\Controllers;

use App\Models\Programare;
use App\Models\Medic;
use App\Models\Pacient;
use Illuminate\Http\Request;

class ProgramareController extends Controller
{
    public function index()
    {
        $programari = Programare::with(['medic', 'pacient'])->get();
        return view('programari.index', compact('programari'));
    }

    public function create()
    {
        $medici = Medic::all();
        $pacienti = Pacient::all();

        return view('programari.create', compact('medici', 'pacienti'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'MedicID' => 'required|exists:medici,MedicID',
            'PacientID' => 'required|exists:pacienti,PacientID',
            'Data' => 'required|date',
        ]);

        Programare::create($data);

        return redirect()->route('home');
    }

    public function edit(Programare $programari)
    {
        $medici = Medic::all();
        $pacienti = Pacient::all();

        return view('programari.edit', [
            'programare' => $programari,
            'medici' => $medici,
            'pacienti' => $pacienti,
        ]);
    }

    public function update(Request $request, Programare $programari)
    {
        $data = $request->validate([
            'MedicID' => 'required|exists:medici,MedicID',
            'PacientID' => 'required|exists:pacienti,PacientID',
            'Data' => 'required|date',
        ]);

        $programari->update($data);

        return redirect()->route('home');
    }

    public function destroy(Programare $programari)
    {
        $programari->delete();
        return redirect()->route('home');
    }
}
