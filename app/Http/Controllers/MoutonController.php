<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactPourMoutonMail;
use App\Mail\InscriptionMail;
use App\Models\Mouton;
use App\Models\Personne;
use App\Models\Profil;
use App\Models\User;
use App\Notifications\EleveurRegistreNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class MoutonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moutons = Mouton::paginate(8);
        $profil = Profil::where('name', 'Eleveur')->first();
        return view('accueil', compact('moutons', 'profil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mouton = Mouton::findOrFail($id);

        return view('Eleveur.moutons.detail', compact('mouton'));
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

    public function contact(ContactFormRequest $request, Mouton $mouton)
    {
        $proprietaire = Personne::where('id_personne', $mouton->personne->id_personne)->first();
        if ($proprietaire) {
            $emailProprietaire = $proprietaire->email;

            $data = $request->validated();
            $data['name'] = $request->input('name');
            $data['email'] = $request->input('email');
            $data['message'] = $request->input('message');

            Mail::to($emailProprietaire)->send(new ContactPourMoutonMail($mouton, $data));

            return back()->with('success', 'Votre message est bien envoyé au propriétaire du mouton.');
        } else {
            return back()->with('error', 'Le propriétaire du mouton n\'a pas été trouvé.');
        }
    }

    public function inscrire(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string',
            'profil' => 'nullable|string',
            'telephone' => 'required|numeric|min:4',
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

        DB::table('profil_user')->insert([
            'user_id' => $user->id,
            'profil_id' => $validatedData['profil'],
        ]);

        $data = array(
            'user' => $user,
        );


            Mail::to($user->email)->send(new InscriptionMail($user)); // Envoyer un e-mail avec le Mailable

            return redirect()->route('index')->with('success', 'Vous etes bien inscrit!');
        //}
        //$user->notify(new EleveurRegistreNotification($personne));


    }



}
