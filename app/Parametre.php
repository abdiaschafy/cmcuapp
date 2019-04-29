<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $fillable = [
        'patient_id', 'poids', 'tenssion', 'temperature'
    ];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
