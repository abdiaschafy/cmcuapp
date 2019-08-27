<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use App\Prescription;
use App\Patient;
use Db;
use function GuzzleHttp\Promise\all;

class PrescriptionController extends Controller
{
    public function create(patient $patient)
    {
        $prescriptions = Prescription::with('patient')->where('patient_id', $patient->id)->get();
        return view('admin.prescriptions.create', compact('patient', 'prescriptions'));
    }


    public function store(Request $request, Patient $patient)
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


                Flashy('La nouvelle prescription a été crée avec succès !!');

                return back();
    
    }

    public function show(Request $request, $id)
    {

        $prescriptions = Prescription::find( $id);

        return view('admin.prescriptions.show', compact('prescriptions'));
    }

    public function export_prescription($id)
    {

        $prescriptions = Prescription::find($id);
        $pdf = \PDF::loadView('admin.etats.prescriptions', compact('prescriptions'));

        $pdf->save(storage_path('prescriptions').'.pdf');

        return $pdf->download('prescriptions.pdf');
    }

}



