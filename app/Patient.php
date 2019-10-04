<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Patient
 *
 * @property int $id
 * @property int $user_id
 * @property int $numero_dossier
 * @property string $name
 * @property string|null $assurance
 * @property string|null $numero_assurance
 * @property string|null $prise_en_charge
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $reste
 * @property int|null $assurancec
 * @property int|null $assurec
 * @property string|null $demarcheur
 * @property string|null $motif
 * @property string|null $prenom
 * @property string|null $date_insertion
 * @property int|null $montant
 * @property int|null $avance
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\AdaptationTraitement[] $adaptation_traitements
 * @property-read int|null $adaptation_traitements_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CompteRenduBlocOperatoire[] $compte_rendu_bloc_operatoires
 * @property-read int|null $compte_rendu_bloc_operatoires_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ConsultationAnesthesiste[] $consultation_anesthesistes
 * @property-read int|null $consultation_anesthesistes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Consultation[] $consultations
 * @property-read int|null $consultations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Devis[] $devis
 * @property-read int|null $devis_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Devisd[] $devisd
 * @property-read int|null $devisd_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\DevisImage[] $devisimage
 * @property-read int|null $devisimage_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Dossier[] $dossiers
 * @property-read int|null $dossiers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $event
 * @property-read int|null $event_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Examen[] $examens
 * @property-read int|null $examens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\FactureConsultation[] $facture_chambres
 * @property-read int|null $facture_chambres_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\FactureConsultation[] $facture_consultations
 * @property-read int|null $facture_consultations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\FicheIntervention[] $fiche_interventions
 * @property-read int|null $fiche_interventions_count
 * @property-read mixed $created_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Intervention[] $interventions
 * @property-read int|null $interventions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Ordonance[] $ordonances
 * @property-read int|null $ordonances_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Parametre[] $parametres
 * @property-read int|null $parametres_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Premedication[] $premedications
 * @property-read int|null $premedications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Prescription[] $prescriptions
 * @property-read int|null $prescriptions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Soin[] $soins
 * @property-read int|null $soins_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\TraitementHospitalisation[] $traitement_hospitalisations
 * @property-read int|null $traitement_hospitalisations_count
 * @property-read \App\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\VisitePreanesthesique[] $visite_preanesthesiques
 * @property-read int|null $visite_preanesthesiques_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereAssurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereAssurancec($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereAssurec($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereAvance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereDateInsertion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereDemarcheur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereMontant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereMotif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereNumeroAssurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereNumeroDossier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient wherePriseEnCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereReste($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Patient whereUserId($value)
 * @mixin \Eloquent
 */
class Patient extends Model
{
    protected $fillable = [
        'numero_dossier',
        'assurance',
        'assurancec',
        'assurec',
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
        'medecin_r',
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
    public function devisd()
    {
        return $this->hasMany(Devisd::class);
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

    public function visite_preanesthesiques()
    {
        return $this->hasMany(VisitePreanesthesique::class);
    }

    public function premedications()
    {
        return $this->hasMany(Premedication::class);
    }

    public function traitement_hospitalisations()
    {
        return $this->hasMany(TraitementHospitalisation::class);
    }
    public function adaptation_traitements()
    {
        return $this->hasMany(AdaptationTraitement::class);
    }

    public function parametres()
    {
        return $this->hasMany(Parametre::class);
    }

    public function dossiers()
    {
        return $this->hasMany(Dossier::class);
    }

    public function fiche_consommables()
    {
        return $this->hasMany(FicheConsommable::class);
    }

    public function observation_medicales()
    {
        return $this->hasMany(ObservationMedicale::class);
    }

    public function soins_infirmiers()
    {
        return $this->hasMany(SoinsInfirmier::class);
    }

    public function surveillance_post_anesthesiques()
    {
        return $this->hasMany(SurveillancePostAnesthesique::class);
    }

    public function user()
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
