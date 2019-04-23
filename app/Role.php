<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
    ];

    public $timestamps = true;

//    gession avec la table pivot

//    public function users()
//    {
//        return $this->belongsToMany(User::class, 'user_role');


    public function users()
    {
        return $this->hasMany('App\User');
    }
}
