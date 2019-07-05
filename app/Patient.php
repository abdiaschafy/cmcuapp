<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'numero_dossier',
        'assurance',
        'numero_assurance',
        'user_id',
        'telephone',
        'motif',
        'image',

    ] ;

    public function soins()
    {
        return $this->hasMany(Soin::class);
    }

    public function images()
    {
        return $this->belongsToMany('Image','images_patients');
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function compte_rendu_bloc_operatoires()
    {
        return $this->hasMany(CompteRenduBlocOperatoire::class);
    }

    public function compte_rendu_hospitalisations()
    {
        return $this->hasMany(CompteRenduHospitalisation::class);
    }

    public function ordonances()
    {
        return $this->hasMany(Ordonance::class);
    }

    public function parametres()
    {
        return $this->hasMany(Parametre::class);
    }

    public function dossiers()
    {
        return $this->hasMany(Dossier::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans;
    }
    public function isMedecin()
    {
        return Auth::user()->role_id === 2;

    }


}
