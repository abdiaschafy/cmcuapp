<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $fillable = [
        'numero_dossier',
        'taille',
        'sexe',
        'poids',
        'tension',
        'date_naissance',
        'lieu_naissance',
        'adresse',
        'commentaire',
        'profession',
        'temperature',
        'assurance',
        'numero_assurance',
        'personne_contact',
        'tel_personne_contact',
    ] ;

    public function patients()
    {
        return $this->hasOne('App\Patient');
    }

    public function consultations()
    {
        return $this->hasMany('App\Consultation');
    }
}
