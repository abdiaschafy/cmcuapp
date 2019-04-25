<?php


namespace App\Http\Controllers;

use App\Patient;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DossiersController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('admin.dossiers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'numero_dossier'=> '',
            'taille'=> 'required',
            'name'=> 'required',
            'sexe'=> 'required',
            'poids'=> 'required|integer',
            'tension'=> 'required',
            'temperature'=> 'required',
        ]);


        $patient = new Patient();
        $patient->numero_dossier = mt_rand(1000000, 9999999)-1;
        $patient->taille = $request->get('taille');
        $patient->name = $request->get('name');
        $patient->sexe = $request->get('sexe');
        $patient->poids = $request->get('poids');
        $patient->tension = $request->get('tension');
        $patient->temperature = $request->get('temperature');
        $patient->user_id = Auth::id();
        $patient->save();

        return redirect()->route('patients.index')->with('success', 'Le dossier du patient a été ajouté avec succès !');
    }


    public function show($id)
    {
        $patient = Patient::where('id', $id)->first();
        return view('admin.dossiers.show', compact('patient'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
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

