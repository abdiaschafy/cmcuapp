<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Patient;
use App\Produit;
use App\Ordonance;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\image;



class PatientsController extends Controller
{

    public function index()
    {
        $patients = Patient::with('users')->latest()->paginate(100);
        return view('admin.patients.index', compact('patients'));

    }


    public function create()
    {

        return view('admin.patients.create');
    }


    public function store(Request $request)
    {

//        $this->authorize('consulter', Patient::class);
        $this->authorize('update', Patient::class);



            $request->validate([
                'name'=> 'required',
                'assurance'=> '',
                'numero_assurance'=> '',
                'numero_dossier'=> '',
                'prise_en_charge'=> '',
            ]);
         $patient = new Patient();

        $patient->numero_dossier = mt_rand(1000000, 9999999)-1;
        $patient->assurance = $request->get('assurance');
        $patient->numero_assurance = $request->get('numero_assurance');
        $patient->name = $request->get('name');
        $patient->prise_en_charge = $request->get('prise_en_charge');
        $patient->user_id = Auth::id();

        $patient->save();

        return redirect()->route('patients.index')->with('success', 'Le patient a été ajouté avec succès !');
    }


    public function show(Patient $patient)
    {

        return view('admin.patients.show', [
            'patient' => $patient,
            'consultations' => $patient->consultations()->latest()->first(),
            'ordonances' => $patient->ordonances()->paginate(5),
            'dossier' => $patient->dossiers,
            'parametres' =>$patient->parametres()->latest()->first(),
            'compte_rendu_bloc_operatoires' =>$patient->compte_rendu_bloc_operatoires()->latest()->first()
        ]);
    }


    public function update(Request $request, $id)
    {
        $this->authorize('update', Produit::class);
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


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Courier de sortie du patient
     */

    public function index_sortie()
    {
        $lettres = Lettre::all();
        return view('admin.lettres.index', compact('lettres'));
    }


    public function print_sortie(Patient $patient)
    {

        $pdf = PDF::loadView('admin.etats.lettre', [

            'consultations' => Consultation::latest()->first()
        ]);

        $pdf->save(storage_path('lettre').'.pdf');

        return $pdf->stream('lettre-sortie.pdf');
    }


    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index')->with('success', "Le dossier du patient a bien été supprimé");
    }

    public function export_consultation($id)
    {
//        $this->authorize('print', Patient::class);
        $patient = Patient::find($id);
        $pdf = PDF::loadView('admin.etats.consultation', ['patient' => $patient]);

        $pdf->save(storage_path('pdf/consultation').'.pdf');

        return $pdf->stream('consultation.pdf');
    }

    public function export_ordonance($id)
    {
        //$this->authorize('print', Patient::class);
        $ordonance = Ordonance::with('patient')->find($id);
//dd($ordonance);

        $pdf = PDF::loadView('admin.etats.ordonance', compact('ordonance'));

        $pdf->save(storage_path('ordonance').'.pdf');

        return $pdf->stream('ordonance.pdf');
    }


}
