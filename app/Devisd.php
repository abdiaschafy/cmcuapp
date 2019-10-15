<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Devisd
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $patient_id
 * @property string $nom
 * @property int|null $qte1
 * @property int|null $qte2
 * @property int|null $qte3
 * @property int|null $qte4
 * @property string|null $qte5
 * @property string|null $qte6
 * @property string|null $qte7
 * @property int|null $qte8
 * @property int|null $qte9
 * @property int|null $qte10
 * @property int|null $qte11
 * @property int|null $prix_u
 * @property int|null $prix_u1
 * @property int|null $prix_u2
 * @property int|null $prix_u3
 * @property int|null $prix_u4
 * @property int|null $prix_u5
 * @property int|null $prix_u6
 * @property int|null $prix_u7
 * @property int|null $prix_u8
 * @property int|null $prix_u9
 * @property int|null $prix_u10
 * @property int|null $montant
 * @property int|null $montant1
 * @property int|null $montant2
 * @property int|null $montant3
 * @property int|null $montant4
 * @property int|null $montant5
 * @property int|null $montant6
 * @property int|null $montant7
 * @property int|null $montant8
 * @property int|null $montant9
 * @property int|null $montant10
 * @property int|null $montant11
 * @property string|null $elements
 * @property string|null $elements1
 * @property string|null $elements2
 * @property string|null $elements3
 * @property string|null $elements4
 * @property string|null $elements5
 * @property string|null $elements6
 * @property string|null $elements7
 * @property string|null $elements8
 * @property string|null $elements9
 * @property string|null $elements10
 * @property string|null $arreter
 * @property int|null $total1
 * @property int|null $total2
 * @property int|null $total3
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Consultation $consultations
 * @property-read \App\Devis $devis
 * @property-read \App\Patient|null $patient
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereArreter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereElements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereElements1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereElements10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereElements2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereElements3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereElements4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereElements5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereElements6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereElements7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereElements8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereElements9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereMontant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereMontant1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereMontant10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereMontant11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereMontant2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereMontant3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereMontant4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereMontant5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereMontant6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereMontant7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereMontant8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereMontant9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd wherePrixU($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd wherePrixU1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd wherePrixU10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd wherePrixU2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd wherePrixU3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd wherePrixU4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd wherePrixU5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd wherePrixU6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd wherePrixU7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd wherePrixU8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd wherePrixU9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereQte1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereQte10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereQte11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereQte2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereQte3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereQte4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereQte5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereQte6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereQte7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereQte8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereQte9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereTotal1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereTotal2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereTotal3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devisd whereUserId($value)
 * @mixin \Eloquent
 */
class Devisd extends Model
{
    protected $fillable = [

           'patient_id',
           'devis_id',
           'user_id',
            'nom',
            'prix1',
            'prix2',
            'prix3',
            'prix4',
            'prix5',
            'prix6',
            'prix7',
            'prix8',
            'prix9',
            'prix10',
            'prix11',
            'prix12',
            'prix13',
            'prix14',
            'prix15',
            'prix16',
            'prix17',
            'prix18',
            'prix19',
            'prix20',
            'prix21',
            'prix22',
            'prix23',
            'prix24',
            'prix25',
            'prix26',
            'prix27',
            'prix28',
            'prix29',
            'prix30',
            'prix31',
            'prix32',
            'prix33',
            'prix34',
            'prix35',
            'prix36',
            'prix37',
            'prix38',
            'prix39',
            'prix40',
            'prix41',
            'prix42',
            'prix43',
            'prix44',
            'prix45',
            'prix46',
            'prix47',
            'prix48',
            'prix49',
            'prix50',
            'prix51',
            'prix52',
            'prix53',
            'prix54',
            'prix55',
            'prix56',
            'prix57',
            'prix58',
            'prix59',
            'prix60',
            'prix61',
            'prix62',
            'prix63',
            'prix64',
            'prix65',
            'prix66',
            'prix67',
            'prix68',
            'prix69',
            'prix70',
            'prix71',
            'prix72',
            'prix73',
            'prix74',
            'prix75',
            'prix76',
            'prix77',
            'prix78',
            'prix79',
            'prix80',
            'prix81',
            'prix82',
            'prix83',
            'prix84',
            'prix85',
            'prix86',
            'prix87',
            'prix88',
            'prix89',
            'prix90',
            'prix91',
            'prix92',
            'prix93',
            'prix94',
            'prix95',
            'prix96',
            'prix97',
            'prix98',
            'prix99',
            'prix100',
            'prix101',
            'prix102',
            'prix103',
            'prix104',
            'prix105',
            'prix106',
            'prix107',
            'prix108',
            'prix109',
            'prix110',
            'prix111',
            'prix112',
            'prix113',
            'prix114',
            'prix115',
            'prix116',
            'prix117',
            'prix118',
            'prix119',
            'prix120',
            'prix121',
            'prix122',
            'prix123',
            'prix124',
            'prix125',
            'prix126',
            'prix127',
            'prix128',
            'prix129',
            'prix130',
            'prix131',
            'prix132',
            'prix133',
            'prix134',
            'prix135',
            'prix136',
            'prix137',
            'prix138',
            'prix139',
            'prix140',
            'prix141',
            'prix142',
            'prix143',
            'prix144',
            'prix145',
            'prix146',
            'prix147',
            'prix148',
            'prix149',
            'prix150',
            'elements',
            'elements1',
            'elements2',
            'elements3',
            'elements4',
            'elements5',
            'elements6',
            'elements7',
            'elements8',
            'elements9',
            'elements10',
            'elements11',
            'elements12',
            'elements13',
            'elements14',
            'elements15',
             'souselements1',
            'souselements2',
            'souselements3',
            'souselements4',
            'souselements5',
            'souselements6',
            'souselements7',
            'souselements8',
            'souselements9',
            'souselements10',
            'souselements11',
            'souselements12',
            'souselements13',
            'souselements14',
            'souselements15',
            'souselements16',
            'souselements17',
            'souselements18',
            'souselements19',
            'souselements20',
            'souselements21',
            'souselements22',
            'souselements23',
            'souselements24',
            'souselements25',
            'souselements26',
            'souselements27',
            'souselements28',
            'souselements29',
            'souselements30',
            'souselements31',
            'souselements32',
            'souselements33',
            'souselements34',
            'souselements35',
            'souselements36',
            'souselements37',
            'souselements38',
            'souselements39',
            'souselements40',
            'souselements41',
            'souselements42',
            'souselements43',
            'souselements44',
            'souselements45',
            'souselements46',
            'souselements47',
            'souselements48',
            'souselements49',
            'souselements50',
            'souselements51',
            'souselements52',
            'souselements53',
            'souselements54',
            'souselements55',
            'souselements56',
            'souselements57',
            'souselements58',
            'souselements59',
            'souselements60',
            'souselements61',
            'souselements62',
            'souselements63',
            'souselements64',
            'souselements65',
            'souselements66',
            'souselements67',
            'souselements68',
            'souselements69',
            'souselements70',
            'souselements71',
            'souselements72',
            'souselements73',
            'souselements74',
            'souselements75',
            'souselements76',
            'souselements77',
            'souselements78',
            'souselements79',
            'souselements80',
            'souselements81',
            'souselements82',
            'souselements83',
            'souselements84',
            'souselements85',
            'souselements86',
            'souselements87',
            'souselements88',
            'souselements89',
            'souselements90',
            'souselements91',
            'souselements92',
            'souselements93',
            'souselements94',
            'souselements95',
            'souselements96',
            'souselements97',
            'souselements98',
            'souselements99',
            'souselements100',
            'souselements101',
            'souselements102',
            'souselements103',
            'souselements104',
            'souselements105',
            'souselements106',
            'souselements107',
            'souselements108',
            'souselements109',
            'souselements110',
            'souselements111',
            'souselements112',
            'souselements113',
            'souselements114',
            'souselements115',
            'souselements116',
            'souselements117',
            'souselements118',
            'souselements119',
            'souselements120',
            'souselements121',
            'souselements122',
            'souselements123',
            'souselements124',
            'souselements125',
            'souselements126',
            'souselements127',
            'souselements128',
            'souselements129',
            'souselements130',
            'souselements131',
            'souselements132',
            'souselements133',
            'souselements134',
            'souselements135',
            'souselements136',
            'souselements137',
            'souselements138',
            'souselements139',
            'souselements140',
            'souselements141',
            'souselements142',
            'souselements143',
            'souselements144',
            'souselements145',
            'souselements146',
            'souselements147',
            'souselements148',
            'souselements149',
            'souselements150',
    
        ] ;
    
        public function patient()
        {
            return $this->belongsTo(Patient::class);
        }
    
        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
        public function consultations()
        {
            return $this->hasOne(Consultation::class);
        }

        public function devis()
        {
            return $this->belongsTo(Devis::class);
        }

        public function isLogistique()
        {
            return Auth::user()->role_id === 5;
    
        }
}
