<?php

namespace App\Policies;

use App\User;
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

    public function view(User $user)
    {
        return in_array(auth()->user()->role_id, [
            1,6
        ]);
    }

    public function create(User $user)
    {
        return in_array(auth()->user()->role_id, [
            1,6
        ]);
    }
}
