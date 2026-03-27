<?php

namespace App\Http\Controllers;

use App\Models\Pacient;
use Illuminate\Http\Request;

class PacientController extends Controller
{
    public function index()
    {
        $pacienti = Pacient::all();
        return view('pacienti.index', compact('pacienti'));
    }

    public function create()
    {
        return view('pacienti.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'NumePacient' => 'required|string|max:255',
            'PrenumePacient' => 'required|string|max:255',
            'Adresa' => 'required|string|max:255',
            'Asigurare' => 'required|boolean',
        ]);

        Pacient::create($data);

        return redirect()->route('home');
    }

    public function edit(Pacient $pacienti)
    {
        return view('pacienti.edit', ['pacient' => $pacienti]);
    }

    public function update(Request $request, Pacient $pacienti)
    {
        $data = $request->validate([
            'NumePacient' => 'required|string|max:255',
            'PrenumePacient' => 'required|string|max:255',
            'Adresa' => 'required|string|max:255',
            'Asigurare' => 'required|boolean',
        ]);

        $pacienti->update($data);

        return redirect()->route('home');
    }

    public function destroy(Pacient $pacienti)
    {
        $pacienti->delete();
        return redirect()->route('home');
    }
}
