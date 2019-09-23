<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitePreanesthesique extends Model
{
    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
