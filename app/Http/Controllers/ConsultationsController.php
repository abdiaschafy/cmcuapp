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
        $chambres = Chambre::all();

        return view('admin.consultations.create', compact('mytime', 'patient', 'c', 'produits', 'users', 'chambres'));
    }

    public function store(ConsultationRequest $request)
    {

        $patient = Patient::findOrFail($request->patient_id);


        Consultation::create([
            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'diagnostic'=> request('diagnostic'),
            'interrogatoire'=> request('interrogatoire'),
            'antecedent_m'=> request('antecedent_m'),
            'antecedent_c'=> request('antecedent_c'),
            'allergie'=> request('allergie'),
            'groupe'=> request('groupe'),
            'proposition'=> implode(",", $request->proposition),
            'examen_c'=> request('examen_c'),
            'examen_p'=> request('examen_p'),
            'devis_p'=> request('devis_p'),
            'motif_c'=> request('motif_c'),
            'date_e'=> request('date_e'),
            'date_s'=> request('date_s'),
            'type_e'=> request('type_e'),
            'type_s'=> request('type_s'),
            'medecin_r'=> request('medecin_r'),

        ]);
        Flashy('La nouvelle consultation a été crée avec succès !!');

        return back();
    }

    public function index(Consultation $consultations)
    {

        $consultations = Consultation::latest()->get();
        return view('admin.consultations.index', compact('consultations'));
    }

    
    public function show( $id)
    {

        $consultations = Consultation::find($id);

        return view('admin.consultations.show', compact('consultations'));
    }

}
