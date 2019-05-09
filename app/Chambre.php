<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chambre extends Model
{
    protected $fillable = [

        'numero',
        'categorie',
        'prix',
        'statut'

    ];
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function consultation()
    {
        return $this->hasMany(Consultation::class);
    }
}
