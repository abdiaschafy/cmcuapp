<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soin extends Model
{
    public function consultations()
    {
        return $this->belongsTo('App\Consultation');
    }

    public function parametres()
    {
        return $this->hasMany('App\Parametre');
    }
}
