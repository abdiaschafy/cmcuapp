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
        //dd($request->Hématologie);
   // $prescriptions->name = $request->name;
    $prescriptions->Hématologie = implode(",",$request->Hématologie);
    // $prescriptions->Hémostase = $request->get('Hémostase');
    // $prescriptions->Biochimie = $request->get('Biochimie');
    // $prescriptions->Hormonologie_Sérologie = $request->get('Hormonologie_Sérologie');
    // $prescriptions->Marqueurs_Tumoraux = $request->get('Marqueurs_Tumoraux');
    // $prescriptions->Bactériologie_Parasitologie = $request->get('Bactériologie_Parasitologie');
    // $prescriptions->Spermiologie = $request->get('Spermiologie');
    // $prescriptions->Urines = $request->get('Urines');
    $prescriptions->patient_id = $request->patient_id;

           $prescriptions->save();
    
           
        return redirect()->route('patients.index')->with('success', 'examen ajouté avec succès !');
    }
}
