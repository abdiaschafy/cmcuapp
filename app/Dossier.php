<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $guarded = [];

    public function patients()
    {
        return $this->belongsTo('App\Patient', 'patient_id');
    }
}
