<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $fillable = [
        'user_id', 'patient_id', 'poids', 'tension', 'temperature'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
