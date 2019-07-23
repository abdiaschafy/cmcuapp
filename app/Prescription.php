<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = [
        'patient_id',
        'Hématologie',
        'Hémostase',
        'Biochimie',
        'Hormonologie_Sérologie',
        'Marqueurs_Tumoraux',
        'Bactériologie_Parasitologie',
        'Spermiologie',
        'Urines',
        

    ] ;

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
