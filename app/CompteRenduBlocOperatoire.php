<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompteRenduBlocOperatoire extends Model
{
    protected $fillable = ['patient_id', 'chirurgien', 'anesthesiste', 'cout', 'dure_intervention', 'detail_intervention'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
