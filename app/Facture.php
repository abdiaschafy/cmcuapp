<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['numero'];

    public function factures()
    {
        return $this->belongsToMany(Facture::class);
    }

}
