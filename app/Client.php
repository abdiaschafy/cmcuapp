<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
       
        'client_id',
        'user_id',
        'nom',
        'prenom',
        'motif',
        'montant',
        'avance',
        'reste',

    ] ;

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function facture_client()
    {
        return $this->hasMany(FactureClient::class);
    }


}
