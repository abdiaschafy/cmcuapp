<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordonance extends Model
{

    protected $guarded = [];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
