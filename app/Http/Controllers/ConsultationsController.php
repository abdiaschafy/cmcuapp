<?php

namespace App\Http\Controllers;

use App\Chambre;
use App\Consultation;
use App\Http\Requests\ConsultationRequest;
use App\Patient;
use App\Produit;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ConsultationsController extends Controller
{

    public function index(Consultation $consultations, Patient $patient)
    {

        return view('admin.consultations.index', [
            'patient' => $patient,
            'consultations' => Consultation::with('patient', 'user')->get(),
        ]);
    }



    public function create(Patient $patient)
    {

        $users = User::where('role_id', '=', 2)->get();
        $consutation = Consultation::with('patient')->where('patient_id', $patient->id)->get();

        return view('admin.consultations.create', compact('patient', 'users', 'consutation'));
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
            'acte'=> request('acte'),
            'type_intervention' => request('type_intervention'),
            'date_intervention' => request('date_intervention'),
            'date_consultation' => request('date_consultation'),
            'date_consultation_anesthesiste' => request('date_consultation_anesthesiste'),
            'medecin_r'=> request('medecin_r'),
            'proposition_therapeutique'=> request('proposition_therapeutique'),

        ]);

        Flashy('La nouvelle consultation a été crée avec succès !!');

        return back();
    }

    
    public function show(Request $request, $id)
    {

        $consultations = Consultation::find($id);

        return view('admin.consultations.show', compact('consultations'));
    }

   

}
