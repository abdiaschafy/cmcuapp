<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Produit;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        $produits = Produit::count();
        $users = User::count();

        $patients = Patient::count();

        return view('admin.dashboard', compact('produits', 'users', 'patients'));
    }

    public function index()
    {
        return redirect()->route('admin.dashboard');
    }

}
