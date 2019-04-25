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
        $produitCount = Produit::count();
        $users = User::count();
        $patients = Patient::count();

        return view('admin.dashboard', compact('produitCount', 'users', 'patients'));
    }

    public function index()
    {
        return redirect()->route('admin.dashboard');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
