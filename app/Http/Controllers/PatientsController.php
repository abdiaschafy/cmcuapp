<?php

namespace App\Http\Controllers;

use App\Patient;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::orderBy('id', 'asc')->paginate(8);
        return view('admin.patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::where('id', $id)->first();
        return view('admin.patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function export_pdf($id)
    {

        $patient = Patient::find($id);
        $pdf = \PDF::loadView('admin.etats.consultation', compact('patient'));

        $pdf->save(storage_path('consultation').'.pdf');

//        $content = $pdf->download()->getOriginalContent();
//        Storage::put('public/admin/name.pdf',$content) ;
        return $pdf->download('consultation.pdf');
    }
}
