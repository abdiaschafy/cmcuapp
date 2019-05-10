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

    public function view(User $user, User $model)
    {
        return in_array(auth()->user()->role_id, [
            1,
        ]);
    }


    public function create(User $user)
    {
        return in_array(auth()->user()->role_id, [
            1,
        ]);
    }


    public function update(User $user, User $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
        return true;
    }


    public function forceDelete(User $user, User $model)
    {
        return true;
    }

    public function edit(User $user, User $model)
    {
        return true;
    }
}
