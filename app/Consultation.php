<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{

	protected $fillable = ['user_id', 'patient_id', 'diagnostique', 'commentaire', 'decision', 'resultat_examen', 'chambre_id', 'antecedent', 'allergie', 'groupe'];

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
