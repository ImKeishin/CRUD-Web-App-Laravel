<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicament;

class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicamente = Medicament::all();
        return view('medicamente.index', compact('medicamente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medicamente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Denumire' => 'required|string|max:255',
        ]);

        Medicament::create($data);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */

    /*
    public function show(string $id)
    {
        //
    }
    */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicament $medicamente)
    {
        return view('medicamente.edit', ['medicament' => $medicamente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicament $medicamente)
    {
        $data = $request->validate([
            'Denumire' => 'required|string|max:255',
        ]);

        $medicamente->update($data);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicament $medicamente)
    {
        $medicamente->delete();
        return redirect()->route('home');
    }
}
