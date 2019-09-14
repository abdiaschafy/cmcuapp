<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'numero_dossier',
        'assurance',
        'numero_assurance',
        'prise_en_charge',
        'user_id',
        'telephone',
        'motif',
        'montant',
        'avance',
        'reste',
        'reste1',
        'prenom',
        'demarcheur',
        'date_insertion',
        'image',

    ] ;

    public function devisimage()
    {
        return $this->hasMany(DevisImage::class);
    }
    public function facture_consultations()
    {
        return $this->hasMany(FactureConsultation::class);
    }

    public function facture_chambres()
    {
        return $this->hasMany(FactureConsultation::class);
    }

    public function devis()
    {
        return $this->hasMany(Devis::class);
    }

    public function soins()
    {
        return $this->hasMany(Soin::class);
    }

    public function examens()
    {
        return $this->hasMany(Examen::class);
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function consultation_anesthesistes()
    {
        return $this->hasMany(ConsultationAnesthesiste::class);
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }

    public function compte_rendu_bloc_operatoires()
    {
        return $this->hasMany(CompteRenduBlocOperatoire::class);
    }

    public function compte_rendu_hospitalisations()
    {
        return $this->hasMany(CompteRenduHospitalisation::class);
    }

    public function interventions()
    {
        return $this->hasMany(Intervention::class);
    }

    public function ordonances()
    {
        return $this->hasMany(Ordonance::class);
    }

    public function fiche_interventions()
    {
        return $this->hasMany(FicheIntervention::class);
    }

    public function parametres()
    {
        return $this->hasMany(Parametre::class);
    }

    public function dossiers()
    {
        return $this->hasMany(Dossier::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans;
    }
    public function isMedecin()
    {
        return Auth::user()->role_id === 2;

    }


}
