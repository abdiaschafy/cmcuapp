<?php

namespace App\Http\Controllers;

use App\Event;
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
        $patient = Patient::with('user')->where('user_id', '=', \auth()->id())->get();
        $events = Event::with('patients', 'user')->where('user_id', '=', \auth()->id())->get();

        return view('admin.dashboard', compact('produits', 'users', 'patients', 'events', 'patient'));
    }

    public function index()
    {
        return redirect()->route('admin.dashboard');
    }

}
