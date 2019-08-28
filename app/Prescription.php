<?php

namespace App;

use Illuminate\Database\eloquent\model;

class Prescription extends model
{
    protected $fillable = [
        'patient_id',
        'user_id',
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
