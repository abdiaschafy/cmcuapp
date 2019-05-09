<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Ordonance;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientsController extends Controller
{

    public function index()
    {
        $patients = Patient::with('users')->latest()->paginate(8);
        return view('admin.patients.index', compact('patients'));
    }


    public function create()
    {
        return view('admin.patients.create', compact('patient'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'name'=> 'required',
            'assurance'=> 'required',
            'numero_assurance'=> 'required',
            'numero_dossier'=> '',
//            'frais'=> 'required',
        ]);

        $patient = new Patient();

        $patient->numero_dossier = mt_rand(1000000, 9999999)-1;
        $patient->assurance = $request->get('assurance');
        $patient->numero_assurance = $request->get('numero_assurance');
        $patient->name = $request->get('name');
        $patient->user_id = Auth::id();

        $patient->save();

        return redirect()->route('patients.index')->with('success', 'Le patient a été ajouté avec succès !');
    }


    public function show($id)
    {
        $patient = Patient::find($id);
        $consultations = Consultation::with('chambres');
//        dd($consultations);
        $ordonances = Ordonance::where('patient_id', $id)->orderBy('id', 'desc')->paginate(5);

        return view('admin.patients.show', compact('patient', 'ordonances', 'consultations'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> '',
            'assurance'=> '',
            'numero_assurance'=> '',
            'numero_dossier'=> '',
            'frais'=> '',
        ]);


        $patient = Patient::findOrFail($id);

        $patient->assurance = $request->get('assurance');
        $patient->numero_assurance = $request->get('numero_assurance');
        $patient->name = $request->get('name');
        $patient->frais = $request->get('frais');

        $patient->user_id = Auth::id();
        $patient->save();

        return redirect()->route('patients.show', $patient->id)->with('success', 'Les informations du patient ont été mis à jour avec succès !');
    }


    public function destroy($id)
    {
        //
    }

    public function export_pdf($id)
    {

        $patient = Patient::find($id);
        $pdf = \PDF::loadView('admin.etats.consultation', compact('patient'));

        $pdf->save(storage_path('consultation').'.pdf');

        return $pdf->download('consultation.pdf');
    }
}
