<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'nom',
        'telephone',
        'motif',
    ] ;

    public function dossiers()
    {
        return $this->belongsTo('App\Dossier');
    }
}
