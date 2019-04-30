<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class ConsultationsController extends Controller
{

    public function create($id)
    {

        $mytime = Carbon::now();
        $patient = Patient::where('id', $id);

        return view('admin.consultations.create', compact('mytime', 'patient'));
    }


    public function store(Patient $patient)
    {

        //$patient = Patient::where('patient', $patient->get());

        //dd($patient);

        Consultation::create([
            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'diagnostique'=> request('diagnostique'),
            'commentaire'=> request('commentaire'),
            'decision'=> request('decision'),
            'cout'=> request('cout'),
            'dure_intervention'=> request('dure_intervention'),
            'resultat_examen'=> request('resultat_examen'),

        ]);

        Flashy('Nous vous répondrons dans les plus brefs délais');

        return back();
    }

    public function show($id)
    {
        $patient = Patient::where('id', $id);
        return view('admin.patients.show', compact('patient'));
    }
}
