<?php

namespace App\Policies;

use App\Patient;
use App\Produit;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        if ($user->isAdmin()) {

            return true;
        }
    }


    public function update(User $user)
    {
        return in_array(auth()->user()->role_id, [
            1,
        ]);
    }


}
