<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $fillable = [
        
        'patient_id',
        'type',
    ];


    public function patients()
    {
        return $this->belongsTo('App\Patient');
    }
}
