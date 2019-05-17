<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Chambre extends Model
{
    use Searchable;

    protected $fillable = [

        'numero',
        'categorie',
        'prix',
        'statut'

    ];


    public function searchableAs()
    {
        return 'numero';
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function consultation()
    {
        return $this->hasMany(Consultation::class);
    }
}
