<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $primaryKey = "id_personne";

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'profil',
        'telephone',
        'ville',
        'adresse',
        'photo'
    ];

    public function moutons()
    {
        return $this->hasMany(Mouton::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
