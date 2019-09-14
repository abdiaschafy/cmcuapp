<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Laravel\Scout\Searchable;

class User extends Authenticatable
{
    use Notifiable;
  
    protected $fillable = [
        'name', 'prenom', 'login', 'telephone', 'sexe', 'lieu_naissance', 'date_naissance', 'password', 'specialite', 'onmc'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';


    public function roles()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function devisimage()
    {
        return $this->hasMany(DevisImage::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function produits()
    {
        return $this->belongsTo('App\Produit');
    }

    public function fiches()
    {
        return $this->hasMany('App\Fiche');
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function fiche_interventions()
    {
        return $this->hasMany(FicheIntervention::class);
    }
    
    public function devis()
    {
        return $this->hasMany(Devis::class);
    }
    
//un users medecin aura plusieurs commentaires
   

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function consultation_anesthesistes()
    {
        return $this->hasMany(ConsultationAnesthesiste::class);
    }

    public function ordonances()
    {
        return $this->hasMany(Ordonance::class);
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }
    public function isAdmin()
    {
        return Auth::user()->role_id === 1;

    }
    public function isPharmacien()
    {
        return Auth::user()->role_id === 7;

    }

    public function isGestionnaire()
    {
        return Auth::user()->role_id === 3;

    }

    public function isCaisse()
    {
        return Auth::user()->role_id === 9;

    }


}
