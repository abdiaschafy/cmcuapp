<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevisImage extends Model
{
    protected $fillable = [
        
        'patient_id',
        'user_id',
        'devis_p',
        
        
    ];


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
