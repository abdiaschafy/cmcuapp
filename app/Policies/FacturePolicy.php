<?php

namespace App\Policies;

use App\User;
use App\Facture;
use Illuminate\Auth\Access\HandlesAuthorization;

class FacturePolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        if ($user->isAdmin()) {

            return true;
        }
    }

    public function view(User $user, Facture $facture)
    {
        //
    }

    /**
     * Determine whether the user can create factures.
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
     * Determine whether the user can update the facture.
     *
     * @param  \App\User  $user
     * @param  \App\Facture  $facture
     * @return mixed
     */
    public function update(User $user, Facture $facture)
    {
        //
    }

    /**
     * Determine whether the user can delete the facture.
     *
     * @param  \App\User  $user
     * @param  \App\Facture  $facture
     * @return mixed
     */
    public function delete(User $user, Facture $facture)
    {
        //
    }

    /**
     * Determine whether the user can restore the facture.
     *
     * @param  \App\User  $user
     * @param  \App\Facture  $facture
     * @return mixed
     */
    public function restore(User $user, Facture $facture)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the facture.
     *
     * @param  \App\User  $user
     * @param  \App\Facture  $facture
     * @return mixed
     */
    public function forceDelete(User $user, Facture $facture)
    {
        //
    }
}
