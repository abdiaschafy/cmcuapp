<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Event;
use App\Patient;
use App\Produit;
use App\User;

class AdminController extends Controller
{

    public function dashboard()
    {
        $produits = Produit::count();
        $users = User::count();

        $patients = Patient::count();
        $consultation = Consultation::with('user')->where('user_id', '=', \auth()->id())->get();
        $events = Event::with('patients', 'user')->where('user_id', '=', \auth()->id())->get();

        return view('admin.dashboard', compact('produits', 'users', 'patients', 'events', 'consultation'));
    }

    public function index()
    {
        return redirect()->route('admin.dashboard');
    }

}
