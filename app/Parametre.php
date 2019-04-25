<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    public function soins()
    {
        return $this->belongsTo('App\Soin');
    }
}
