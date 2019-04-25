<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'chambre_numero',
        'age',
        'service',
        'infirmier_charge',
        'accueil',
        'restauration',
        'chambre',
        'soins',
        'notes',
        'quizz',
        'remarque_suggestion'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
