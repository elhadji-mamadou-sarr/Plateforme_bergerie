<?php

namespace Database\Seeders;

use App\Models\Personne;
use App\Models\Profil;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonneUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personne = new Personne([
            'nom' => 'Mamadou',
            'prenom' => 'Sarr',
            'email' => 'elhadji@gmail.com',
            'telephone' => 775639847,
            'ville' => 'Dakar',
            'adresse' => 'Sicap Mbao',
            'photo' => null,
        ]);
        $personne->save();

        // Créez un utilisateur associé à la personne
        $user = new User([
            'name' => 'Mamadou',
            'email' => 'elhadji@gmail.com',
            'password' => bcrypt('elhadji@gmail.com'),
            'personne_id' => $personne->id_personne,
        ]);
        $user->save();

        (new Profil([
            'name' => 'Administrateur',
        ]))->save();



    }
}
