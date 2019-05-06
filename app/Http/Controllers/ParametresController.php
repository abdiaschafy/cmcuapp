<?php

namespace App\Http\Controllers;

use App\Parametre;
use App\Patient;
use Illuminate\Http\Request;

class ParametresController extends Controller
{

    public function store(Request $request)
    {
        $patient = Patient::findOrFail($request->patient_id);

        Parametre::create([

            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'poids' => request('poids'),
            'tension' => request('tension'),
            'temperature' => request('temperature'),

        ]);

        Flashy('Les nouveaux paramètres ont bien été ajouté avec succès !!');

        return back();
    }
}
