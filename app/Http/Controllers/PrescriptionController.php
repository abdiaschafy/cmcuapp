<?php

namespace App\http\Controllers;

use Illuminate\http\Request;
use App\http\Controllers\Controller;
use App\http\Requests\PrescriptionRequest;
use App\Prescription;
use App\Patient;
use Db;

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

       
    $prescriptions->hematologie = implode(",",$request->hematologie);
    $prescriptions->hemostase = implode(",", $request->hemostase);
    $prescriptions->biochimie = implode(",", $request->biochimie);
    $prescriptions->hormonologie_serologie = implode(",", $request->hormonologie_serologie);
    $prescriptions->marqueurs_Tumoraux = implode(",", $request->marqueurs_Tumoraux);
    $prescriptions->bacteriologie_Parasitologie = implode(",", $request->bacteriologie_Parasitologie);
    $prescriptions->spermiologie = implode(",", $request->spermiologie);
    $prescriptions->urines = implode(",", $request->urines);
    $prescriptions->serologie = implode(',', $request->serologie);
     $prescriptions->examen = implode(',', $request->examen);
    $prescriptions->patient_id = $request->patient_id;

           $prescriptions->save();
    
           
        return redirect()->route('patients.index')->with('success', 'examen ajoute avec succès !');
    }
}
