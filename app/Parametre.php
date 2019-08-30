<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $fillable = [
        'user_id', 'patient_id', 'poids', 'temperature', 'ta', 'fc', 'fr', 'spo2', 'glycemie'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
