<?php

namespace App\Http\Controllers;

use App\CompteRenduBlocOperatoire;
use App\Http\Requests\CompteRenduBlocOperatoireRequest;
use App\Patient;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class CompteRenduBlocOperatoireController extends Controller
{
    public function create(Patient $patient)
    {
        $users = User::where('role_id', '=', 2)->get();
        return view('admin.operations.create', compact('patient', 'users'));
    }


    public function store(Request $request, Patient $patient)
    {
        $patient = Patient::findOrFail($request->patient_id);

        CompteRenduBlocOperatoire::create([
            'patient_id' => $patient->id,
            'anesthesiste' => \request('anesthesiste'),
            'chirurgien' => \request('chirurgien'),
            'compte_rendu_o' => \request('compte_rendu_o'),
            'resultat_histo' => \request('resultat_histo'),
            'suite_operatoire' => \request('suite_operatoire'),
            'traitement_propose' => \request('traitement_propose'),
            'soins' => \request('soins'),
            'conclusion' => \request('conclusion'),
            'dure_intervention' => \request('dure_intervention'),
            'date_intervention' => \request('date_intervention')
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
