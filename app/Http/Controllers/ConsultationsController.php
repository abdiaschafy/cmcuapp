<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Http\Requests\ConsultationRequest;
use App\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ConsultationsController extends Controller
{

    public function create(Patient $id)
    {
        $patients = Patient::where('id', $id);

        $mytime = Carbon::now();

        return view('admin.consultations.create', compact('patients', 'mytime'));
    }


    public function store(Request $request)
    {
        $patient = Patient::find(1);

        $request->validate([
            'patient_id'=> '',
            'diagnostique'=> 'required|max:255',
            'commentaire'=> 'required|max:255',
            'decision'=> 'required',
            'cout'=> 'required',
            'dure_intervention'=> '',
            'resultat_examen'=> '',
        ]);

        $consultation = new Consultation();

        $consultation->diagnostique = $request->get('diagnostique');
        $consultation->commentaire = $request->get('commentaire');
        $consultation->decision = $request->get('decision');
        $consultation->cout = $request->get('cout');
        $consultation->dure_intervention = $request->get('dure_intervention');
        $consultation->resultat_examen = $request->get('resultat_examen');
        $consultation->patient_id = $patient->id;

        $consultation->save();



        return view('admin.consultations.create')->with('success', 'Le patient a été ajouté avec succès !');
    }

    public function show($id)
    {
        $patient = Patient::where('id', $id);
        return view('admin.patients.show', compact('patient'));
    }
}
