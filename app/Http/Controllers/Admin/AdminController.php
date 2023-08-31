<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonneFormRequest;
use App\Models\Personne;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleveurs = Personne::all()->where('profil', 'Eleveur');
        return view('admin.administrateur.index', compact('eleveurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admin = new Personne();
        return view('admin.administrateur.form', compact('admin'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string',
            'profil' => 'nullable|string',
            'telephone' => 'required|integer',
            'ville' => 'required|string',
            'adresse' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('photos', 'public');
        }

        $personne = new Personne();
        $personne->nom =  $validatedData['nom'] ;
        $personne->prenom =  $validatedData['prenom'] ;
        $personne->email =  $validatedData['email'] ;
        $personne->profil =  $validatedData['profil'] ;
        $personne->telephone =  $validatedData['telephone'] ;
        $personne->ville =  $validatedData['ville'] ;
        $personne->adresse =  $validatedData['adresse'] ;
        $personne->photo =  $imagePath ;
        $personne->save();

        $user = new User();
        $user->name = $validatedData['nom'];
        $user->email = $validatedData['email'];
        $user->profil = $validatedData['profil'];
        $user->password = Hash::make($validatedData['email']);
        $user->personne_id = $personne->id_personne;
        $user->save();

        return redirect()->route('admin.administrateur.index')->with('success', 'La personne a été ajouter avec succès !');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eleveur = Personne::findOrfail($id);
        return view('admin.administrateur.show', compact('eleveur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = Personne::findOrfail($id);
        return view('admin.administrateur.form', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonneFormRequest $request, string $id)
    {
        $personne = Personne::findOrFail($id);

        $validatedData = $request->validated();

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            if ($personne->photo) {
                Storage::disk('public')->delete($personne->photo);
            }
            $imagePath = $request->file('photo')->store('photos', 'public');
            $personne->photo = $imagePath;
        }

        $personne->update( $validatedData);
        return redirect()->route('admin.administrateur.index')->with('success', 'La personne a été modifiée avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eleveur = Personne::findOrfail($id);
        if ($eleveur->photo) {
            Storage::disk('public')->delete($eleveur->photo);
        }
        $eleveur->delete();
        return to_route('admin.administrateur.index')->with('success', 'L\'eleveur a bien été supprimer');
    }
}
