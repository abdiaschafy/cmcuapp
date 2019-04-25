<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospitalisation extends Model
{
    public function chambres()
    {
        return $this->belongsTo('App\Chambre');
    }
}
