<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
       
       
        'user_id',
        'nom',
        'prenom',
        'motif',
        'montant',
        'avance',
        'reste',
        'partassurance',
        'partpatient',
        'assurance',
        'numero_assurance',
        'prise_en_charge',
        'demarcheur',
        'medecin_r',
        'date_insertion',

    ] ;

   

    public function facture_client()
    {
        return $this->hasMany(FactureClient::class);
    }

     public function user()
    {
        return $this->belongsTo(User::class);
    }


}
