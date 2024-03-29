<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ConsultationAnesthesiste
 *
 * @property int $id
 * @property int $user_id
 * @property int $patient_id
 * @property string $specialite
 * @property string $medecin_traitant
 * @property string $operateur
 * @property string $date_intervention
 * @property string $motif_admission
 * @property string|null $memo
 * @property string $anesthesi_salle
 * @property string $risque
 * @property string|null $solide
 * @property string|null $liquide
 * @property string $benefice_risque
 * @property string|null $adaptation_traitement
 * @property string $technique_anesthesie
 * @property string $technique_anesthesie1
 * @property string $synthese_preop
 * @property string|null $date_hospitalisation
 * @property string|null $service
 * @property string|null $classe_asa
 * @property string $antecedent_traitement
 * @property string $examen_clinique
 * @property string|null $allergie
 * @property string $traitement_en_cours
 * @property string|null $antibiotique
 * @property string|null $jeune_preop
 * @property string|null $autre1
 * @property string|null $examen_paraclinique
 * @property string|null $intubation
 * @property string|null $mallampati
 * @property string|null $distance_interincisive
 * @property string|null $distance_thyromentoniere
 * @property string|null $mobilite_servicale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Patient $patient
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereAdaptationTraitement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereAllergie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereAnesthesiSalle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereAntecedentTraitement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereAntibiotique($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereAutre1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereBeneficeRisque($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereClasseAsa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereDateHospitalisation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereDateIntervention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereDistanceInterincisive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereDistanceThyromentoniere($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereExamenClinique($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereExamenParaclinique($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereIntubation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereJeunePreop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereLiquide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereMallampati($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereMedecinTraitant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereMemo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereMobiliteServicale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereMotifAdmission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereOperateur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereRisque($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereSolide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereSpecialite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereSynthesePreop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereTechniqueAnesthesie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereTechniqueAnesthesie1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereTraitementEnCours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ConsultationAnesthesiste whereUserId($value)
 * @mixin \Eloquent
 */
class ConsultationAnesthesiste extends Model
{
    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
