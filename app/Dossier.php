<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $fillable = [
        'patient_id',
        'sexe',
        'date_naissance',
        'lieu_naissance',
        'adresse',
        'profession',
        'personne_contact',
        'tel_personne_contact',
    ] ;

    public function patients()
    {
        return $this->belongsTo('App\Patient', 'patient_id');
    }
}
