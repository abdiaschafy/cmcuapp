<?php

namespace App\Http\Controllers;

use App\Chambre;
use App\Consultation;
use App\Http\Requests\ConsultationRequest;
use App\Patient;
use App\Produit;
use App\User;
use Carbon\Carbon;

class ConsultationsController extends Controller
{

    public function create(Patient $patient)
    {

        $mytime = Carbon::now();
        $c = 1;
        $produits = Produit::where('categorie', '=', 'PHARMACEUTIQUE')->get();
        $users = User::where('role_id', '=', 2)->get();

        return view('admin.consultations.create', compact('mytime', 'patient', 'c', 'produits', 'users'));
    }

    public function store(ConsultationRequest $request)
    {

        $patient = Patient::findOrFail($request->patient_id);


        Consultation::create([
            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'diagnostique'=> request('diagnostique'),
            'commentaire'=> request('commentaire'),
            'antecedent'=> request('antecedent'),
            'allergie'=> request('allergie'),
            'groupe'=> request('groupe'),
            'decision'=> request('decision'),
            'resultat_examen'=> request('resultat_examen'),

        ]);
        Flashy('La nouvelle consultation a été crée avec succès !!');

        return back();
    }

    public function index(Consultation $consultations)
    {

        $consultations = Consultation::latest()->get();
        return view('admin.consultations.index', compact('consultations'));
    }

}
