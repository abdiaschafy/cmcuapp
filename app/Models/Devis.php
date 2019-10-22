<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Devis
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
 * @property-read \App\Devisd $devisd
 * @property-read \App\Patient|null $patient
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereArreter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereElements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereElements1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereElements10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereElements2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereElements3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereElements4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereElements5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereElements6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereElements7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereElements8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereElements9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereMontant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereMontant1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereMontant10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereMontant11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereMontant2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereMontant3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereMontant4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereMontant5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereMontant6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereMontant7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereMontant8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereMontant9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis wherePrixU($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis wherePrixU1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis wherePrixU10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis wherePrixU2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis wherePrixU3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis wherePrixU4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis wherePrixU5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis wherePrixU6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis wherePrixU7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis wherePrixU8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis wherePrixU9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereQte1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereQte10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereQte11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereQte2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereQte3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereQte4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereQte5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereQte6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereQte7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereQte8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereQte9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereTotal1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereTotal2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereTotal3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Devis whereUserId($value)
 * @mixin \Eloquent
 */
class Devis extends Model
{
    
    protected $fillable = [

    //orchidectomie bilaterale
            
            'patient_id',
            'user_id',
            'nom',
            'qte1',
            'qte2',
            'qte3',
            'qte4',
            'qte5',
            'qte6',
            'qte7',
            'qte8',
            'qte9',
            'qte10',
            'qte11',
            'qte12',
            'qte13',
            'qte14',
            'prix_u',
            'prix_u1',
            'prix_u2',
            'prix_u3',
            'prix_u4',
            'prix_u5',
            'prix_u6',
            'prix_u7',
            'prix_u8',
            'prix_u9',
            'prix_u10',
            'prix_u11',
            'prix_u12',
            'prix_u13',
            'prix_u14',
            'montant',
            'montant1',
            'montant2',
            'montant3',
            'montant4',
            'montant5',
            'montant6',
            'montant7',
            'montant8',
            'montant9',
            'montant10',
            'montant11',
            'montant12',
            'montant13',
            'montant14',
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
            'arreter',
            'total1',
            'total2',
            'total3',



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

    public function devisd()
    {
        return $this->hasOne(Devisd::class);
    }

    public function isLogistique()
    {
        return Auth::user()->role_id === 5;

    }
}
