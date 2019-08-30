<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParametreRequest;
use App\Parametre;
use App\Patient;

class ParametresController extends Controller
{

    public function store(ParametreRequest $request)
    {
        $patient = Patient::findOrFail($request->patient_id);

        Parametre::create([

            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'ta' => request('ta'),
            'fr' => request('fr'),
            'fc' => request('fc'),
            'glycemie' => request('glycemie'),
            'spo2' => request('spo2'),
            'poids' => request('poids'),
            'temperature' => request('temperature'),

        ]);

        Flashy('Les nouveaux paramètres ont bien été ajouté avec succès !!');

        return back();
    }
}
