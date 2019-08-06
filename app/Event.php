<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'date', 'start_time','end_time','color', 'medecin', 'patient_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
