<?php

namespace App\Policies;

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
            1
        ]);
    }

    public function show(User $user)
    {
        return in_array(auth()->user()->role_id, [
            1,2,4,6
        ]);
    }

    public function view(User $user)
    {
        return in_array(auth()->user()->role_id, [
            1,6,9
        ]);
    }

    public function devis(User $user)
    {
        return in_array(auth()->user()->role_id, [
            1,2,6,7,3,9,3
        ]);
    }


}
