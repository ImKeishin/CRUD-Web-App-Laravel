<?php

namespace App\Http\Controllers;

use App\Models\Consultatie;
use App\Models\Pacient;
use App\Models\Medicament;
use Illuminate\Http\Request;

class ConsultatieController extends Controller
{
    public function index()
    {
        $consultatii = Consultatie::with(['pacient', 'medicament'])->get();
        return view('consultatii.index', compact('consultatii'));
    }

    public function create()
    {
        $pacienti = Pacient::all();
        $medicamente = Medicament::all();

        return view('consultatii.create', compact('pacienti', 'medicamente'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'PacientID' => 'required|exists:pacienti,PacientID',
            'MedicamentID' => 'required|exists:medicamente,MedicamentID',
            'Diagnostic' => 'required|string|max:255',
            'DozaMedicament' => 'required|string|max:255',
        ]);

        Consultatie::create($data);

        return redirect()->route('home');
    }

    public function edit(Consultatie $consultatii)
    {
        $pacienti = Pacient::all();
        $medicamente = Medicament::all();

        return view('consultatii.edit', [
            'consultatie' => $consultatii,
            'pacienti' => $pacienti,
            'medicamente' => $medicamente,
        ]);
    }

    public function update(Request $request, Consultatie $consultatii)
    {
        $data = $request->validate([
            'PacientID' => 'required|exists:pacienti,PacientID',
            'MedicamentID' => 'required|exists:medicamente,MedicamentID',
            'Diagnostic' => 'required|string|max:255',
            'DozaMedicament' => 'required|string|max:255',
        ]);

        $consultatii->update($data);

        return redirect()->route('home');
    }

    public function destroy(Consultatie $consultatii)
    {
        $consultatii->delete();
        return redirect()->route('home');
    }
}
