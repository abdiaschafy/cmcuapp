<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PrescriptionRequest;
use App\Prescription;
use App\Patient;
use DB;

class PrescriptionController extends Controller
{
    public function create(patient $patient)
    {
        return view('admin.prescriptions.create', compact('patient'));
    }


    public function store(PrescriptionRequest $request, Patient $patient)
    {

        $patient = Patient::findOrFail($request->patient_id);
      
       $prescriptions = new Prescription ();

        
    $prescriptions->Hématologie = implode(",", $request['Hématologie']);
    $prescriptions->Hémostase = implode(",", $request['Hémostase']);
    $prescriptions->Biochimie = implode(",", $request['Biochimie']);
    $prescriptions->Hormonologie_Sérologie = implode(",", $request['Hormonologie_Sérologie']);
    $prescriptions->Marqueurs_Tumoraux = implode(",", $request['Marqueurs_Tumoraux']);
    $prescriptions->Bactériologie_Parasitologie = implode(",", $request['Bactériologie_Parasitologie']);
    $prescriptions->Spermiologie = implode(",", $request['Spermiologie']);
    $prescriptions->Urines = implode(",", $request['Urines']);
    $prescriptions->Urines = implode(",", $request['Sérologie']);
    $prescriptions->Urines = implode(",", $request['Examen']);
    
    $prescriptions->patient_id = $request->patient_id;

           $prescriptions->save();
    
           
        return redirect()->route('patients.index')->with('success', 'examen ajouté avec succès !');
    }
}
