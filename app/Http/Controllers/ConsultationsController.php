<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Http\Requests\ConsultationRequest;
use App\Patient;
use Carbon\Carbon;

class ConsultationsController extends Controller
{

    public function create(Patient $patient)
    {

        $mytime = Carbon::now();

        return view('admin.consultations.create', compact('mytime', 'patient'));
    }

    public function store(ConsultationRequest $request)
    {

        $patient = Patient::findOrFail($request->patient_id);

        Consultation::create([
            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'diagnostique'=> request('diagnostique'),
            'commentaire'=> request('commentaire'),
            'decision'=> request('decision'),
            'cout'=> request('cout'),
            'dure_intervention'=> request('dure_intervention'),
            'resultat_examen'=> request('resultat_examen'),
            'chambre'=> request('chambre'),

        ]);

        Flashy('La nouvelle consultation a été crée avec succès !!');

        return back();
    }

    public function export_pdf($id)
    {

        $patient = Patient::find($id);
        $pdf = \PDF::loadView('admin.etats.consultation', compact('patient'));

        $pdf->save(storage_path('consultation').'.pdf');

        return $pdf->download('consultation.pdf');
    }
}
