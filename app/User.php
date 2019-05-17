<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'prenom', 'login', 'telephone', 'sexe', 'lieu_naissance', 'date_naissance', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';

//    gestion avec la table pivot

//    public function roles()
//    {
//        return $this->belongsToMany(Role::class, 'user_role');
//    }

    public function roles()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function events()
    {
        return $this->belongsTo('App\Event');
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

//un users medecin aura plusieurs commentaires
    public function consultations()
    {
        return $this->hasMany(Consultation::class);
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
