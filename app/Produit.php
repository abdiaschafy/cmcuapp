<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Produit extends Model
{

    protected $fillable = [
        'designation',
        'categorie',
        'qte_stock',
        'qte_alerte',
        'prix_unitaire'

    ] ;


    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function factures()
    {
        return $this->belongsToMany(Facture::class)
            ->withPivot('item', 'prix_total')
            ->withTimestamps();
    }
}


