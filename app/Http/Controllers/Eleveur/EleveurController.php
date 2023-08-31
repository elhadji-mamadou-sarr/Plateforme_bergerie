<?php

namespace App\Http\Controllers\Eleveur;

use App\Http\Controllers\Controller;
use App\Models\Mouton;
use App\Models\Personne;
use Illuminate\Http\Request;

class EleveurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moutons = Mouton::all();
        return view('Eleveur.moutons.index', compact('moutons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mouton = new Mouton();
        $eleveurs = Personne::all()->where('profil', 'Eleveur');
        return view('Eleveur.moutons.form', compact('mouton', 'eleveurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom_mouton' => 'required|string',
            'race' => 'required|string',
            'généalogie' => 'required|string',
            'prix' => 'required|numeric',
            'personne_id' => 'required|',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('photos', 'public');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
