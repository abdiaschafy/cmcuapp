<?php

namespace App;

use Illuminate\Database\eloquent\model;

class Prescription extends model
{
    protected $fillable = [
        'patient_id',
        'hematologie' ,
        'hemostase',
        'biochimie',
        'hormonologie',
        'marqueurs',
        'bacteriologie',
        'spermiologie',
        'urines',
        'serologie',
        'examen',
       
    ] ;

   

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
