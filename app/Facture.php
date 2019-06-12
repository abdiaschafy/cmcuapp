<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['numero', 'prix_total', 'quantite_total'];

    public function factures()
    {
        return $this->belongsToMany(Facture::class);
    }

}
