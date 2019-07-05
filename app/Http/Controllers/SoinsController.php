<?php

namespace App\Http\Controllers;

use App\Http\Requests\SoinsRequest;
use App\Patient;
use App\Soin;
use Illuminate\Support\Facades\Request;

class SoinsController extends Controller
{

    public function store(SoinsRequest $request, Patient $patient)
    {
        $patient = Patient::findOrFail($request->patient_id);

        Soin::create([
            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'content'=> request('content'),
            'contexte'=> request('contexte')

        ]);

        Flashy('La liste des soins reçu a bien été miuse à jour');

        return back();
    }
}
