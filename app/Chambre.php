<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Chambre extends Model
{

    protected $fillable = [

        'numero',
        'categorie',
        'prix',
        'statut',
        'patient',
        'jour'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function consultations()
    {
        return $this->belongsTo(Consultation::class);
    }
}
