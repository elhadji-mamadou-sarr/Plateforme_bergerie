<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouton extends Model
{
    use HasFactory;
    protected $primaryKey = "id_mouton";

    protected $fillable = [
        'nom_mouton',
        'prix',
        'généalogie',
        'race',
        'personne_id',
        'image',
    ];

    public function personne()
    {
        return $this->belongsTo(Personne::class, 'personne_id');
    }

}
