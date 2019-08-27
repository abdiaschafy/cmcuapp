<?php

namespace App\Policies;

use App\User;
use App\Patient;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientPolicy
{
    use HandlesAuthorization;


    public function before(User $user, $ability)
    {
        if ($user->isAdmin() && $user->isCaisse() && $user->isMedecin()) {

            return true;
        }
    }

    public function view(User $user, Patient $patient)
    {
        return true;
    }


    public function create(User $user)
    {
        return in_array(auth()->user()->role_id, [
            1,2,9,
        ]);
    }


    public function update(User $user)
    {
        return in_array(auth()->user()->role_id, [
            1,2,9,
        ]);
    }


    public function delete(User $user, Patient $patient)
    {
        //
    }


    public function restore(User $user, Patient $patient)
    {
        //
    }


    public function forceDelete(User $user, Patient $patient)
    {
        //
    }

    public function print(User $user)
    {
        return in_array(auth()->user()->role_id, [
            1,9,
        ]);

    }

    public function consulter()
    {
        return in_array(auth()->user()->role_id, [
            1,2,
        ]);

    }

    public function anesthesiste()
    {
        return in_array(auth()->user()->id, [
            12,
        ]);

    }




}
