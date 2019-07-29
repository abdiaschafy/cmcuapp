<?php

namespace App;

use Illuminate\Database\eloquent\model;

class Prescription extends model
{
    protected $fillable = [
        'patient_id',
        'hematologie' => 'array',
        'hemostase'=> 'array',
        'biochimie'=> 'array',
        'hormonologie'=> 'array',
        'marqueurs'=> 'array',
        'bacteriologie'=> 'array',
        'spermiologie'=> 'array',
        'urines'=> 'array',
        'serologie'=> 'array',
        'examen'=> 'array',
       
    ] ;

   

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
