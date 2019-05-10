<?php

namespace App\Policies;

use App\User;
use App\Chambre;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChambrePolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        if ($user->isAdmin()) {

            return true;
        }
    }

    public function view(User $user, Chambre $chambre)
    {
        //
    }

    /**
     * Determine whether the user can create chambres.
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
     * Determine whether the user can update the chambre.
     *
     * @param  \App\User  $user
     * @param  \App\Chambre  $chambre
     * @return mixed
     */
    public function update(User $user, Chambre $chambre)
    {
        //
    }

    /**
     * Determine whether the user can delete the chambre.
     *
     * @param  \App\User  $user
     * @param  \App\Chambre  $chambre
     * @return mixed
     */
    public function delete(User $user, Chambre $chambre)
    {
        //
    }

    /**
     * Determine whether the user can restore the chambre.
     *
     * @param  \App\User  $user
     * @param  \App\Chambre  $chambre
     * @return mixed
     */
    public function restore(User $user, Chambre $chambre)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the chambre.
     *
     * @param  \App\User  $user
     * @param  \App\Chambre  $chambre
     * @return mixed
     */
    public function forceDelete(User $user, Chambre $chambre)
    {
        //
    }
}
