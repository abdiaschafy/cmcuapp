<?php


namespace App\Http\Controllers;

use App\Dossier;
use App\Http\Requests\DossierRequest;
use App\Patient;
use Illuminate\Support\Facades\Auth;

class DossiersController extends Controller
{

    public function create(Patient $patient)
    {

        return view('admin.dossiers.create', compact('patient'));
    }


    public function store(DossierRequest $request)
    {

        Dossier::create([
            'patient_id'=> request('patient_id'),
            'sexe'=> request('sexe'),
            'date_naissance'=> request('date_naissance'),
            'lieu_naissance'=> request('lieu_naissance'),
            'adresse'=> request('adresse'),
            'profession'=> request('profession'),
            'personne_contact'=> request('personne_contact'),
            'tel_personne_contact'=> request('tel_personne_contact'),
        ]);

        return redirect()->route('patients.index')->with('info', 'Le dossier du patient a bien été mis à jour !');
    }
}

