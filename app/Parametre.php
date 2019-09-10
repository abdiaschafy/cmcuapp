<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $fillable = [
        'user_id', 'patient_id', 'poids', 'temperature', 'fc', 'fr', 'spo2', 'glycemie', 'bras_gauche', 'bras_droit', 'date_naissance', 'age', 'inc_bmi', 'taille'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
