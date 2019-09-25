<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\ConsultationAnesthesiste;
use App\FactureConsultation;
use App\FicheIntervention;
use App\Patient;
use App\Ordonance;
use App\User;
use App\VisitePreanesthesique;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\image;



class PatientsController extends Controller
{

    public function index()
    {
        $this->authorize('update', Patient::class);
        $patients = Patient::with('user')->latest()->paginate(100);
        return view('admin.patients.index', compact('patients'));

    }


    public function create()
    {
        $this->authorize('update', Patient::class);

        return view('admin.patients.create');
    }


    public function store(Request $request)
    {
        $this->authorize('update', Patient::class);

            $request->validate([
                'name'=> 'required',
                'name'=> '',
                'prenom'=> '',
                'assurance'=> '',
                'assurancec'=> '',
                'assurec'=> '',
                'motif'=> '',
                'montant'=> '',
                'avance'=> '',
                'reste'=> '',
                'reste1'=> '',
                'demarcheur'=> '',
                'numero_assurance'=> '',
                'numero_dossier'=> '',
                'prise_en_charge'=> '',
                'date_insertion'=> '',
            ]);
         $patient = new Patient();
        $patient->numero_dossier = mt_rand(1000000, 9999999)-1;
        $patient->assurance = $request->get('assurance');
        $patient->reste1= (($request->get('montant')));

        $patient->assurec =((int)$request->get('montant') * (((int)$request->get('prise_en_charge')) / 100));

        $patient->assurancec = ((int)$request->get('montant')) - ((int)$patient->assurec);
        $patient->numero_assurance = $request->get('numero_assurance');
        $patient->name = $request->get('name');
        $patient->prenom = $request->get('prenom');
        $patient->prise_en_charge = $request->get('prise_en_charge');
        $patient->montant = $request->get('montant');
        $patient->avance = $request->get('avance');
        if($patient->assurance){
            $patient->reste = $patient->assurec - $patient->avance  ;
        }else
        {
            $patient->reste = $request->get('montant') - $request->get('avance') ;
        }
        
        $patient->demarcheur = $request->get('demarcheur');
        $patient->motif = 'CONSULTATION';
        $patient->date_insertion = $request->get('date_insertion');
        $patient->user_id = Auth::id();

        $patient->save();

        return redirect()->route('patients.index')->with('success', 'Le patient a été ajouté avec succès !');
    }


    public function show(Patient $patient)
    {
        $this->authorize('update', Patient::class);

        return view('admin.patients.show', [
            'patient' => $patient,
            'medecin' => User::where('role_id', '=', 2)->get(),
            'consultations' => Consultation::with('patient', 'user')->latest()->first(),
            'consultation_anesthesistes' => ConsultationAnesthesiste::with('patient', 'user')->latest()->first(),
            'visite_anesthesistes' => VisitePreanesthesique::with('patient', 'user')->latest()->first(),
            'fiche_interventions' => FicheIntervention::with('patient', 'user')->get(),
            'prescriptions' => $patient->prescriptions()->get(),
            'ordonances' => $patient->ordonances()->paginate(5),
            'dossiers' => $patient->dossiers()->latest()->first(),
            'parametres' =>$patient->parametres()->latest()->first(),
            'compte_rendu_bloc_operatoires' =>$patient->compte_rendu_bloc_operatoires()->latest()->first()
        ]);
    }


    public function update(Request $request, $id)
    {
        $this->authorize('update', Patient::class);
        $request->validate([
            'name'=> '',
            'prenom'=> '',
            'assurance'=> '',
            'assurancec'=> '',
            'assurec'=> '',
            'numero_assurance'=> '',
            'numero_dossier'=> '',
            'montant'=> '',
            'motif'=> '',
            'avance'=> '',
            'reste'=> '',
            'reste1'=> '',
            'demarcheur'=> '',
            'prise_en_charge'=> '',
            'date_insertion' => 'date_insertion',
        ]);


        $patient = Patient::findOrFail($id);

        $patient->assurance = $request->get('assurance');
        $patient->numero_assurance = $request->get('numero_assurance');
        $patient->name = $request->get('name');
        $patient->montant = $request->get('montant');
        $patient->avance = $request->get('avance');
        $patient->reste = $request->get('reste');
        $patient->reste1 = $request->get('reste1');
        $patient->assurancec = $request->get('assurancec');
        $patient->assurec = $request->get('assurec');
        $patient->demarcheur = $request->get('demarcheur');
        $patient->prise_en_charge = $request->get('prise_en_charge');
        $patient->motif = $request->get('motif');
        $patient->date_insertion = $request->get('date_insertion');
        $patient->prenom = $request->get('prenom');
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
            'patient' => $patient,
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

    public function generate_consultation($id)
    {
        $this->authorize('update', Patient::class);
        $this->authorize('print', Patient::class);
        $patient = Patient::find($id);

        $facture = FactureConsultation::create([
            'numero' => $patient->numero_dossier,
            'patient_id' => $patient->id,
            'assurance' => $patient->assurance,
            'assurancec' => $patient->assurancec,
            'assurec' => $patient->assurec,
            'motif' => $patient->motif,
            'montant' => $patient->montant,
            'demarcheur' => $patient->demarcheur,
            'avance' => $patient->avance,
            'reste' => $patient->reste,
            'prenom' => $patient->prenom,
            'date_insertion' => $patient->date_insertion,
            'user_id' => \auth()->user()->id,
        ]);


        return back()->with('success', 'La facture a bien été généré veuillez consulter votre liste des factures');
    }

    public function export_ordonance($id)
    {
        //$this->authorize('print', Patient::class);
        $ordonance = Ordonance::with('patient', 'user')->find($id);

        $pdf = PDF::loadView('admin.etats.ordonance', compact('ordonance'));

        $pdf->save(storage_path('ordonance').'.pdf');

        return $pdf->stream('ordonance.pdf');
    }


}
