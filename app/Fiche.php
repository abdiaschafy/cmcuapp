<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'chambre',
        'service',
        'infirmier_charge',
        'accueil',
        'restaurant',
        'soins',
        'quizz',
        'commentaire'

    ] ;


}
