<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'numero_dossier',
        'taille',
        'sexe',
        'poids',
        'tension',
        'temperature'

    ] ;
}
