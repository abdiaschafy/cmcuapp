<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    public function hospitalisations()
    {
        return $this->hasMany('App\Chambre');
    }
}
