<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Laravel\Scout\Searchable;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $prenom
 * @property string $login
 * @property int $telephone
 * @property string $sexe
 * @property string $lieu_naissance
 * @property string $date_naissance
 * @property string|null $specialite
 * @property string|null $onmc
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $role_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\AdaptationTraitement[] $adaptation_traitements
 * @property-read int|null $adaptation_traitements_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Client[] $clients
 * @property-read int|null $clients_count
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $events
 * @property-read int|null $events_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\FicheIntervention[] $fiche_interventions
 * @property-read int|null $fiche_interventions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Fiche[] $fiches
 * @property-read int|null $fiches_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Ordonance[] $ordonances
 * @property-read int|null $ordonances_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Patient[] $patients
 * @property-read int|null $patients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Premedication[] $premedications
 * @property-read int|null $premedications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Prescription[] $prescriptions
 * @property-read int|null $prescriptions_count
 * @property-read \App\Produit $produits
 * @property-read \App\Role|null $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\TraitementHospitalisation[] $traitement_hospitalisations
 * @property-read int|null $traitement_hospitalisations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\VisitePreanesthesique[] $visite_preanesthesiques
 * @property-read int|null $visite_preanesthesiques_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDateNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLieuNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOnmc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereSexe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereSpecialite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;
  
    protected $fillable = [
        'name', 'prenom', 'login', 'telephone', 'sexe', 'lieu_naissance', 'date_naissance', 'password', 'specialite', 'onmc'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';


    public function roles()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function devisimage()
    {
        return $this->hasMany(DevisImage::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function produits()
    {
        return $this->belongsTo('App\Produit');
    }

    public function fiches()
    {
        return $this->hasMany('App\Fiche');
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
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

    public function devis()
    {
        return $this->hasMany(Devis::class);
    }

    public function devisd()
    {
        return $this->hasMany(Devisd::class);
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function consultation_anesthesistes()
    {
        return $this->hasMany(ConsultationAnesthesiste::class);
    }

    public function ordonances()
    {
        return $this->hasMany(Ordonance::class);
    }

    public function compte_rendu_bloc_operatoires()
    {
        return $this->hasMany(CompteRenduBlocOperatoire::class);
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

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }
    public function isAdmin()
    {
        return Auth::user()->role_id === 1;

    }
    public function isPharmacien()
    {
        return Auth::user()->role_id === 7;

    }

    public function isGestionnaire()
    {
        return Auth::user()->role_id === 3;

    }

    public function isCaisse()
    {
        return Auth::user()->role_id === 9;

    }

    public function isLogistique()
    {
        return Auth::user()->role_id === 5;

    }

    public function facture_consultations()
    {
        return $this->hasMany(FactureConsultation::class);
    }


}
