<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{

	protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function chambres()
    {
        return $this->belongsTo(Chambre::class);
    }

    public function devis()
    {
        return $this->belongsTo(Devis::class);
    }


}
