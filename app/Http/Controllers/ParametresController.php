<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParametreRequest;
use App\Parametre;
use App\Patient;
use Carbon\Carbon;

class ParametresController extends Controller
{

    public function index(Patient $patient)
    {
        return view('admin.consultations.surveillance_rapproche_param', compact('patient'));
    }


    public function fiche_parametre_store(ParametreRequest $request)
    {
        $patient = Patient::findOrFail($request->patient_id);

        Parametre::create([

            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'fr' => request('fr'),
            'fc' => request('fc'),
            'bras_gauche' => request('bras_gauche'),
            'bras_droit' => request('bras_droit'),
            'taille' => request('taille'),
            'inc_bmi' => number_format(request('poids')/((request('taille'))*(request('taille'))), 2),
            'date_naissance' => request('date_naissance'),
            'age' => Carbon::parse(request('date_naissance'))->age,
            'glycemie' => request('glycemie'),
            'spo2' => request('spo2'),
            'poids' => request('poids'),
            'temperature' => request('temperature'),

        ]);

        Flashy('Les nouveaux paramètres ont bien été ajouté avec succès !!');

        return back();
    }

    public function fiche_parametre_update(ParametreRequest $request, Parametre $parametre)
    {

        $parametre->update($request->all());

        Flashy('Les paramètres ont bien été modifiés');

        return back();
    }
}
