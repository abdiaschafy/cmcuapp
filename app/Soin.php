<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soin extends Model
{
    protected $fillable = ['user_id', 'patient_id', 'content', 'contexte'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
