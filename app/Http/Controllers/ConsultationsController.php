<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\ConsultationAnesthesiste;
use App\Prescription;
use Barryvdh\DomPDF\Facade as PDF;
use App\Devis;
use App\Http\Requests\ConsultationRequest;
use App\Patient;
use App\User;

use Illuminate\Http\Request;


class ConsultationsController extends Controller
{

    public function index_chirurgien(Consultation $consultations, Patient $patient)
    {

        return view('admin.consultations.index_chirurgien', [
            'patient' => $patient,
            'consultations' => Consultation::with('patient', 'user')->get(),
        ]);
    }

    public function index_anesthesiste(ConsultationAnesthesiste $consultationAnesthesiste, Patient $patient)
    {

        return view('admin.consultations.index_anesthesiste', [
            'patient' => $patient,
            'consultationAnesthesistes' => ConsultationAnesthesiste::with('patient', 'user')->get(),
        ]);
    }



    public function create(Patient $patient)
    {

        $users = User::where('role_id', '=', 2)->with('patients')->get();
        $devis = Devis::all();
        $consultation = Consultation::with('patient')->where('patient_id', $patient->id)->first();
        $prescriptions = Prescription::with('patient')->where('patient_id', $patient->id)->latest()->first();

        return view('admin.consultations.create', compact('patient', 'users', 'consultation','devis', 'prescriptions'));
    }

    public function edit(Consultation $consultation, Patient $patient)
    {

        $users = User::where('role_id', '=', 2)->with('patients')->get();
        $devis = Devis::all();
        $consultation = Consultation::with('patient', 'user')->where('patient_id', $patient->id)->first();

        $prescriptions = Prescription::with('patient')->where('patient_id', $patient->id)->latest()->first();

        return view('admin.consultations.edit', compact('patient', 'users', 'consultation','devis', 'prescriptions'));
    }

    public function Cstore(ConsultationRequest $request)
    {

        $patient = Patient::findOrFail($request->patient_id);


        Consultation::create([
            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'diagnostic'=> request('diagnostic'),
            'interrogatoire'=> request('interrogatoire'),
            'antecedent_m'=> request('antecedent_m'),
            'antecedent_c'=> request('antecedent_c'),
            'allergie'=> request('allergie'),
            'groupe'=> request('groupe'),
            'proposition'=> implode(",", $request->proposition),
            'examen_c'=> request('examen_c'),
            'examen_p'=> request('examen_p'),
            'devis_p'=> request('devis_p'),
            'motif_c'=> request('motif_c'),
            'acte'=> implode(",", $request->acte ?? []),
            'type_intervention' => request('type_intervention'),
            'date_intervention' => request('date_intervention'),
            'date_consultation' => request('date_consultation'),
            'date_consultation_anesthesiste' => request('date_consultation_anesthesiste'),
            'medecin_r'=> request('medecin_r'),
            'proposition_therapeutique'=> request('proposition_therapeutique'),

        ]);

        Flashy('La nouvelle consultation a été crée avec succès !!');

        return back();
    }

    public function Astore(Request $request)
    {

        $patient = Patient::findOrFail($request->patient_id);

        $ConsultationAnesthesiste = new ConsultationAnesthesiste();

        $ConsultationAnesthesiste->user_id = auth()->id();
        $ConsultationAnesthesiste->patient_id = $patient->id;
        $ConsultationAnesthesiste->specialite = \request('specialite');
        $ConsultationAnesthesiste->medecin_traitant = \request('medecin_traitant');
        $ConsultationAnesthesiste->operateur = \request('operateur');
        $ConsultationAnesthesiste->date_intervention = \request('date_intervention');
        $ConsultationAnesthesiste->motif_admission = \request('motif_admission');
        $ConsultationAnesthesiste->anesthesi_salle = implode(",", $request->anesthesi_salle ?? []);
        $ConsultationAnesthesiste->risque = \request('risque');
        $ConsultationAnesthesiste->solide = \request('solide');
        $ConsultationAnesthesiste->liquide = \request('liquide');
        $ConsultationAnesthesiste->benefice_risque = \request('benefice_risque');
        $ConsultationAnesthesiste->technique_anesthesie = implode(",", $request->technique_anesthesie ?? []);
        $ConsultationAnesthesiste->technique_anesthesie1 = \request('technique_anesthesie1');
        $ConsultationAnesthesiste->synthese_preop = \request('synthese_preop');
        $ConsultationAnesthesiste->antecedent_traitement = \request('antecedent_traitement');
        $ConsultationAnesthesiste->examen_clinique = \request('examen_clinique');
        $ConsultationAnesthesiste->traitement_en_cours = \request('traitement_en_cours');
        $ConsultationAnesthesiste->antibiotique = \request('antibiotique');
        $ConsultationAnesthesiste->jeune_preop = implode(",", $request->jeune_preop ?? []);
        $ConsultationAnesthesiste->autre1 = \request('autre1');
        $ConsultationAnesthesiste->memo = \request('memo');
        $ConsultationAnesthesiste->adaptation_traitement = \request('adaptation_traitement');
        $ConsultationAnesthesiste->date_hospitalisation = \request('date_hospitalisation');
        $ConsultationAnesthesiste->service = \request('service');
        $ConsultationAnesthesiste->classe_asa = \request('classe_asa');
        $ConsultationAnesthesiste->allergie = \request('allergie');
        $ConsultationAnesthesiste->examen_paraclinique = implode(",", $request->examen_paraclinique ?? []);
        $ConsultationAnesthesiste->intubation = \request('intubation');
        $ConsultationAnesthesiste->mallampati = \request('mallampati');
        $ConsultationAnesthesiste->distance_interincisive = \request('distance_interincisive');
        $ConsultationAnesthesiste->distance_thyromentoniere = \request('distance_thyromentoniere');
        $ConsultationAnesthesiste->mobilite_servicale = \request('mobilite_servicale');

        $ConsultationAnesthesiste->save();

        Flashy('La nouvelle consultation a été crée avec succès !!');

        return back();
    }

    
    public function show(Request $request, $id)
    {

        $consultations = Consultation::find($id);

        return view('admin.consultations.show', compact('consultations'));
    }

    public function Export_consentement_eclaire(Patient $patient)
    {

        $pdf = PDF::loadView('admin.etats.consentement_eclaire', [

            'patient' => $patient,
            'dossiers' => $patient->dossiers()->latest()->first(),
            'fiche_intervention' => $patient->fiche_interventions()->latest()->first(),
            'consultation_anesthesiste' => $patient->consultation_anesthesistes()->latest()->first()
        ]);


        return $pdf->stream('consentement_eclaire.pdf');
    }

   

}
