<?php

namespace App\Http\Controllers;

use App\CompteRenduBlocOperatoire;
use App\Http\Requests\CompteRenduBlocOperatoireRequest;
use App\Patient;
use Barryvdh\DomPDF\Facade as PDF;

class CompteRenduBlocOperatoireController extends Controller
{
    public function store(CompteRenduBlocOperatoireRequest $request, Patient $patient)
    {
        $patient = Patient::findOrFail($request->patient_id);

        CompteRenduBlocOperatoire::create([
            'patient_id' => $patient->id,
            'anesthesiste' => \request('anesthesiste'),
            'chirurgien' => \request('chirurgien'),
            'cout' => \request('cout'),
            'dure_intervention' => \request('dure_intervention'),
            'detail_intervention' => \request('detail_intervention')
        ]);

        Flashy('Le compte rendu du bloc opérqtoire a été ajouté avec succes');

        return back();
    }


    public function compte_rendu_bloc_pdf($id)
    {

        $patient = Patient::with('compte_rendu_bloc_operatoires', 'consultations')->findOrFail($id);

        $pdf = PDF::loadView('admin.etats.crbo', compact('patient'));

        $pdf->save(storage_path('crbo').'.pdf');

        return $pdf->stream('crbo.pdf');
    }
}
