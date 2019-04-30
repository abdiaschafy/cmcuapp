<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'numero_dossier',
        'assurance',
        'numero_assurance',
        'chambre_id',
        'user_id',
        'telephone',
        'motif',
    ] ;

    public function dossiers()
    {
        return $this->belongsTo('App\Dossier');
    }
// un patient aura plusieurs consultation
    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function parametres()
    {
        return $this->belongsTo(Parametre::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function getUrlAttribute()
    {
        return route('patients.show', $this->id);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans;
    }

}
