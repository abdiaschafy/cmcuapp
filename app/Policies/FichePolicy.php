<?php

namespace App\Policies;

use App\User;
use App\Fiche;
use Illuminate\Auth\Access\HandlesAuthorization;

class FichePolicy
{
    use HandlesAuthorization;



    public function before(User $user, $ability)
    {
        if ($user->isAdmin()) {

            return true;
        }
    }

    public function view(User $user, Fiche $fiche)
    {
        //
    }

    /**
     * Determine whether the user can create fiches.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array(auth()->user()->role_id, [
            1,
        ]);
    }

    /**
     * Determine whether the user can update the fiche.
     *
     * @param  \App\User  $user
     * @param  \App\Fiche  $fiche
     * @return mixed
     */
    public function update(User $user, Fiche $fiche)
    {
        //
    }

    public function delete(User $user, Fiche $fiche)
    {
        //
    }
}
