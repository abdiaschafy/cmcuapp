<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fiche;

class FicheController extends Controller
{

    public function index()
    {
        return view('admin.fiches.index');
    }

    public function create()
    {
        return view('admin.fiches.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=> 'required',
            'age'=> 'required',
            'chambre'=> 'required',
            'service'=> 'required',
            'infirmier_charge'=> 'required',
            'accueil'=> 'required',
            'restaurant'=> 'required',
            'soins'=> 'required|integer',
            'quizz'=> 'required',
            'commentaire'=> 'required',
        ]);
        $fiche = new Fiche();
        $fiche->nom = $request->get('nom');
        $fiche->prenom = $request->get('prenom');
        $fiche->age = $request->get('age');
        $fiche->chambre = $request->get('chambre');
        $fiche->service = $request->get('service');
        $fiche->infirmier_charge = $request->get('infirmier_charge');
        $fiche->accueil = $request->get('accueil');
        $fiche->restaurant = $request->get('restaurant');
        $fiche->soins = $request->get('soins');
        $fiche->quizz = $request->get('quizz');
        $fiche->commentaire = $request->get('commentaire');
        $fiche->user_id = Auth::id();
        $fiche->save();

        return redirect()->route('fiches.index')->with('success', 'Le produit a été ajouté avec succès !');
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
