<?php

namespace App\Http\Controllers;

use App\Ordonance;
use App\Patient;
use Illuminate\Http\Request;

class OrdonancesController extends Controller
{

    public function store(Request $request)
    {
        $patient = Patient::findOrFail($request->patient_id);

        Ordonance::create([
            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'description'=> request('description'),

        ]);

        Flashy('La nouvelle ordonance a été crée avec succès !!');

        return back();
    }

}
