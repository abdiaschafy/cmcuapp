<?php

namespace App\Http\Controllers;

use App\CompteRenduHospitalisation;
use App\Patient;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class CompteRenduHospitalisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Patient $patient)
    {

        return view('admin.hospitalisation.index', [

            'patient' => $patient,
            'consultations' => $patient->consultations()->latest()->first(),
            'ordonances' => $patient->ordonances()->paginate(5),
            'dossier' => $patient->dossiers,
            'compte_rendu_bloc_operatoires' => $patient->compte_rendu_bloc_operatoires()->latest()->first(),
            'compte_rendu_hospitalisations' => $patient->compte_rendu_hospitalisations()->latest()->first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = Patient::findOrFail($request->patient_id);

        CompteRenduHospitalisation::create([
            'patient_id' => $patient->id,
            'traitement_sortie' => \request('traitement_sortie'),
            'suite_operatoire' => \request('suite_operatoire'),
            'sortie' => \request('sortie')
        ]);

        return redirect()->route('compte_rendu_hos.create', $patient->id)->with('success', 'Le compte rendu d\'hospitalisation a bien été crée');
    }

    public function compte_rendu_hos($id)
    {
        $patient = Patient::with('compte_rendu_hospitalisations', 'consultations')->findOrFail($id);

        $pdf = PDF::loadView('admin.etats.crh', compact('patient'));

        $pdf->save(storage_path('crh').'.pdf');

        return $pdf->stream('crh.pdf');
    }
}
