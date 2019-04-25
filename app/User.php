<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'prenom', 'login', 'telephone', 'sexe', 'lieu_naissance', 'date_naissance', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
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
        return $this->belongsToMany('App\Event');
    }

    public function produits()
    {
        return $this->belongsToMany('App\Produit');
    }

    public function fiches()
    {
        return $this->hasMany('App\Fiche');
    }

}
