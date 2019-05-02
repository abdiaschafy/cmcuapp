<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Soin;
use Illuminate\Http\Request;

class SoinsController extends Controller
{

    public function store(Patient $patient)
    {
        Soin::create([
            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'content'=> request('content')

        ]);

        Flashy('Nouvelle');

        return back();
    }
}
