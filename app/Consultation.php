<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    public function consultations()
    {
        return $this->belongsTo('App\Dossier');
    }

    public function soins()
    {
        return $this->hasMany('App\Soin');
    }
}
