<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class ConsultationsController extends Controller
{

    public function create()
    {
        $patient = Patient::all();
        return view('admin.consultations.create', compact('patient'));
    }


    public function store(Request $request)
    {
        //
    }
}
