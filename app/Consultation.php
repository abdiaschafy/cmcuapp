<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{

	protected $fillable = ['user_id', 'patient_id', 'diagnostique', 'commentaire', 'decision', 'cout', 'dure_intervention', 'resultat_examen', 'chambre_id'];

    public function user()
    {
        return $this->belongsTo('User::class');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
    }

}
