<?php

namespace App\http\Controllers;

use Illuminate\http\Request;
use App\http\Controllers\Controller;
use App\http\Requests\PrescriptionRequest;
use App\Prescription;
use App\Patient;
use Db;
use function GuzzleHttp\Promise\all;

class PrescriptionController extends Controller
{
    public function create(patient $patient)
    {
        return view('admin.prescriptions.create', compact('patient'));
    }


    public function store(PrescriptionRequest $request, Patient $patient)
    {
       
        $prescriptions = [];
        $patient = Patient::findOrFail($request->patient_id);

        $prescriptions = new Prescription ();

       
    $prescriptions->hematologie = implode(',', $request->hematologie ?? []);
    $prescriptions->hemostase = implode(',', $request->hemostase  ?? []);
   $prescriptions->biochimie = implode(',', $request->biochimie ?? []);
  $prescriptions->hormonologie = implode(',', $request->hormonologie ?? []);
  $prescriptions->marqueurs = implode(',', $request->marqueurs ?? []);
  $prescriptions->bacteriologie = implode(',', $request->bacteriologie ?? []);
  $prescriptions->spermiologie = implode(',', $request->spermiologie ?? []);
  $prescriptions->urines = implode(',', $request->urines ?? []);
  $prescriptions->serologie = implode(',', $request->serologie ?? []);
  $prescriptions->examen = implode(',', $request->examen ?? []);
  
  $prescriptions->patient_id = $request->patient_id;

           $prescriptions->save();



        //    Prescription::create([
           
        //     'patient_id' => $patient->id,
        //     // 'hematologie'=> request(implode(',', $prescriptions)),
        //     'hemostase'=> implode(',', $request->hemostase),
        //     'biochimie'=> dd(request('biochimie')),
        //     // 'hormonologie'=> request('hormonologie'),
        //     // 'marqueurs'=> request('marqueurs'),
        //     // 'bacteriologie'=> request('bacteriologie'),
        //     // 'spermiologie '=> request('spermiologie '),
        //     // 'serologie'=> request('serologie'),
        //     // 'urines'=> request('urines'),
        //     // 'examen'=> request('examen'),

        // ]);

        Flashy('La nouvelle prescription a été crée avec succès !!');

        return back();
    
    }
}



