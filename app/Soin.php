<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Soin
 *
 * @property int $id
 * @property int $user_id
 * @property int $patient_id
 * @property string $content
 * @property string $contexte
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Patient $patient
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soin query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soin whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soin whereContexte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soin wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Soin whereUserId($value)
 * @mixin \Eloquent
 */
class Soin extends Model
{
    protected $fillable = ['user_id', 'patient_id', 'content', 'contexte'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
