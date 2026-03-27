<?php

namespace App\Http\Controllers;

use App\Models\Medic;
use Illuminate\Http\Request;

class MedicController extends Controller
{
    public function index()
    {
        $medici = Medic::all();
        return view('medici.index', compact('medici'));
    }

    public function create()
    {
        return view('medici.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'NumeMedic' => 'required|string|max:255',
            'PrenumeMedic' => 'required|string|max:255',
            'Specializare' => 'required|string|max:255',
        ]);

        Medic::create($data);

        return redirect()->route('home');
    }

    public function edit(Medic $medici)
    {
        return view('medici.edit', ['medic' => $medici]);
    }

    public function update(Request $request, Medic $medici)
    {
        $data = $request->validate([
            'NumeMedic' => 'required|string|max:255',
            'PrenumeMedic' => 'required|string|max:255',
            'Specializare' => 'required|string|max:255',
        ]);

        $medici->update($data);

        return redirect()->route('home');
    }

    public function destroy(Medic $medici)
    {
        $medici->delete();
        return redirect()->route('home');
    }
}
