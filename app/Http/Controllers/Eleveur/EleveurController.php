<?php

namespace App\Http\Controllers\Eleveur;

use App\Http\Controllers\Controller;
use App\Models\Mouton;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $eleveurs = Personne::all()->where('profil', 'Eleveur');;
        return view('Eleveur.moutons.form', compact('mouton', 'eleveurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données de la requête
        $mouton = new Mouton();
        $validatedData = $request->validate([
            'nom_mouton' => 'required|string',
            'race' => 'required|string',
            'généalogie' => 'required|string',
            'prix' => 'required|numeric',
            'personne_id' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('image_moutons', 'public');
        }

        $mouton->nom_mouton = $validatedData['nom_mouton'];
        $mouton->race = $validatedData['race'];
        $mouton->généalogie = $validatedData['généalogie'];
        $mouton->prix = $validatedData['prix'];
        $mouton->personne_id = $validatedData['personne_id'];
        $mouton->image = $imagePath;

        $mouton->save();

        return redirect()->route('eleveur.mouton.index')->with('success', 'Mouton ajouté avec succès.');
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
        $mouton = Mouton::findOrfail($id);
        return view('Eleveur.moutons.form', compact('mouton'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mouton =  Mouton::findOrfail($id);
        $validatedData = $request->validate([
            'nom_mouton' => 'required|string',
            'race' => 'required|string',
            'généalogie' => 'required|string',
            'prix' => 'required|numeric',
            'personne_id' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if($request->hasFile('image') && $request->file('image')->isValid()){
            if($mouton->image){
                Storage::disk('public')->delete($mouton->image);
            }
            $imagePath = $request->file('image')->store('image_moutons', 'public');
            $mouton->image = $imagePath;
      
        }

        $mouton->nom_mouton = $validatedData['nom_mouton'];
        $mouton->race = $validatedData['race'];
        $mouton->généalogie = $validatedData['généalogie'];
        $mouton->prix = $validatedData['prix'];
        $mouton->personne_id = $validatedData['personne_id'];
        $mouton->image = $imagePath;

        $mouton->save();
        return redirect()->route('eleveur.mouton.index')->with('success', 'Mouton modifier avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mouton = Mouton::findOrfail($id);
        $mouton->delete();
        return redirect()->route('eleveur.mouton.index')->with('success', 'Mouton supprimer avec succès.');

    }
}
