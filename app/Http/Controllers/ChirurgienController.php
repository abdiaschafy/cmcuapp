<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class ChirurgienController extends Controller
{

    public function create(Patient $patient)
    {

        return view('admin.patients.observation_medicale', compact('patient'));
    }


    public function store(Request $request)
    {
        //
    }
}
