<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        
        'patient_id',
        'titre',
        
    ];


    public function patients()
    {
        return $this->belongsTo('patients');
    }

}
