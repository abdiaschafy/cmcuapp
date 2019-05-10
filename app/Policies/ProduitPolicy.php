<?php

namespace App\Policies;

use App\User;
use App\Produit;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProduitPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        if ($user->isAdmin()) {

            return true;
        }
    }

    public function view(User $user, Produit $produit = null)
    {
        return true;
    }


    public function create(User $user)
    {
        return in_array(auth()->user()->role_id, [
                1, 7
            ]);
    }


    public function update(User $user, Produit $produit)
    {
        return true;
    }


    public function delete(User $user, Produit $produit)
    {
        return in_array(auth()->user()->role_id, [
            1, 7
        ]);
    }

    public function edit(User $user)
    {
        return in_array(auth()->user()->role_id, [
            1, 7
        ]);
    }
}
