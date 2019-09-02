<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['numero', 'prix_total', 'quantite_total', 'patient', 'user_id'];

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'facture_produit', 'facture_id','produit_id')
            ->withPivot('item', 'prix_total')
            ->withTimestamps();
    }

}
