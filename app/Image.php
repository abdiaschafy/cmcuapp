<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['url'];

    public function patients()
    {
        return $this->belongsTo('patients', 'images_patients');
    }

}
