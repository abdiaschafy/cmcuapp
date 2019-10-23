<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CompteRenduBlocOperatoire
 *
 * @property int $id
 * @property int $patient_id
 * @property string $chirurgien
 * @property string $aide_op
 * @property string $anesthesiste
 * @property string $infirmier_anesthesiste
 * @property string $date_intervention
 * @property string $dure_intervention
 * @property string $compte_rendu_o
 * @property string $indication_operatoire
 * @property string|null $resultat_histo
 * @property string $suite_operatoire
 * @property string|null $traitement_propose
 * @property string|null $soins
 * @property string $date_e
 * @property string $date_s
 * @property string $type_e
 * @property string $type_s
 * @property string $conclusion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereAideOp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereAnesthesiste($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereChirurgien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereCompteRenduO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereConclusion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereDateE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereDateIntervention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereDateS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereDureIntervention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereIndicationOperatoire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereInfirmierAnesthesiste($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereResultatHisto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereSoins($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereSuiteOperatoire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereTraitementPropose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereTypeE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereTypeS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CompteRenduBlocOperatoire whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CompteRenduBlocOperatoire extends Model
{
    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
