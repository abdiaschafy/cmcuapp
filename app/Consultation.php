<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{

	protected $fillable = [
	    'user_id',
        'patient_id',
        'diagnostique',
        'medecin',
        'commentaire',
        'decision',
        'cout',
        'antecedent_m',
        'antecedent_c',
        'allergie',
        'groupe',
        'motif',
        'examen_p',
        'examen_c',
        'traitement',
    ];

    public function user()
    {
        return $this->belongsTo('User::class');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function chambres()
    {
        return $this->belongsTo(Chambre::class);
    }

}
