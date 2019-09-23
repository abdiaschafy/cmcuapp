<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParametreRequest;
use App\Parametre;
use App\Patient;
use Carbon\Carbon;

class ParametresController extends Controller
{

    public function store(ParametreRequest $request)
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
            'inc_bmi' => request('poids')/((request('taille'))*(request('taille'))),
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
}
