<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Devisd extends Model
{
    protected $guarded = [];
    
        public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function devis()
        {
            return $this->belongsTo(Devis::class);
        }
}
