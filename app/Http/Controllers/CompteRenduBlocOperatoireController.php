<?php

namespace App\Http\Controllers;

use App\CompteRenduBlocOperatoire;
use App\Http\Requests\CompteRenduBlocOperatoireRequest;
use App\Patient;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;

class CompteRenduBlocOperatoireController extends Controller
{
    public function create(Patient $patient)
    {
        $users = User::where('role_id', '=', 2)->get();
        return view('admin.operations.create', compact('patient', 'users'));
    }


    public function store(CompteRenduBlocOperatoireRequest $request, Patient $patient)
    {
        $patient = Patient::findOrFail($request->patient_id);

        CompteRenduBlocOperatoire::create([
            'patient_id' => $patient->id,
            'anesthesiste' => \request('anesthesiste'),
            'aide_op' => \request('aide_op'),
            'chirurgien' => \request('chirurgien'),
            'infirmier_anesthesiste' => \request('infirmier_anesthesiste'),
            'compte_rendu_o' => \request('compte_rendu_o'),
            'indication_operatoire' => \request('indication_operatoire'),
            'resultat_histo' => \request('resultat_histo'),
            'suite_operatoire' => \request('suite_operatoire'),
            'traitement_propose' => \request('traitement_propose'),
            'soins' => \request('soins'),
            'aide_op' => \request('aide_op'),
            'conclusion' => \request('conclusion'),
            'dure_intervention' => \request('dure_intervention'),
            'date_intervention' => \request('date_intervention'),
            'date_e'=> request('date_e'),
            'date_s'=> request('date_s'),
            'type_e'=> request('type_e'),
            'type_s'=> request('type_s'),
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
