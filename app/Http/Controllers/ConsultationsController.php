<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\ConsultationAnesthesiste;
use Barryvdh\DomPDF\Facade as PDF;
use App\Devis;
use App\Http\Requests\ConsultationAnesthesisteRequest;
use App\Http\Requests\ConsultationRequest;
use App\Patient;
use App\User;

use Illuminate\Http\Request;


class ConsultationsController extends Controller
{

    public function index(Consultation $consultations, Patient $patient)
    {

        return view('admin.consultations.index', [
            'patient' => $patient,
            'consultations' => Consultation::with('patient', 'user')->get(),
        ]);
    }



    public function create(Patient $patient, User $user)
    {

        $users = User::where('role_id', '=', 2)->with('patients')->get();
        $devis = Devis::all();
        $consutation = Consultation::with('patient')->where('patient_id', $patient->id)->get();

        return view('admin.consultations.create', compact('patient', 'users', 'consutation','devis'));
    }

    public function store(ConsultationRequest $request)
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
            'acte'=> request('acte'),
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


        ConsultationAnesthesiste::create([
            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'anesthesi_salle'=> implode(",", $request->anesthesi_salle ?? []),
            'specialite'=> request('specialite'),
            'medecin_traitant'=> request('medecin_traitant'),
            'operateur'=> request('operateur'),
            'date_intervention'=> request('date_intervention'),
            'motif_admission'=> request('motif_admission'),
            'technique_anesthesie'=> implode(",", $request->technique_anesthesie ?? []),
            'technique_anesthesie'=> \request('technique_anesthesie1'),
            'date_hospitalisation'=> request('date_hospitalisation'),
            'service'=> request('service'),
            'classe_asa'=> request('classe_asa'),
            'antecedent_traitement'=> request('antecedent_traitement'),
            'examen_clinique'=> request('examen_clinique'),
            'allergie'=> request('allergie'),
            'intubation'=> request('intubation'),
            'mallampati'=> request('mallampati'),
            'distance_interincisive'=> request('distance_interincisive'),
            'distance_thyromentoniere'=> request('distance_thyromentoniere'),
            'mobilite_servicale'=> request('mobilite_servicale'),
            'traitement_en_cours'=> request('traitement_en_cours'),
            'risque'=> request('risque'),
            'benefice_risque'=> request('benefice_risque'),
            'synthese_preop'=> request('synthese_preop'),
            'examen_paraclinique'=> implode(",", $request->examen_paraclinique ?? []),

        ]);

        Flashy('La nouvelle consultation a été crée avec succès !!');

        return back();
    }

    
    public function show(Request $request, $id)
    {

        $consultations = Consultation::find($id);

        return view('admin.consultations.show', compact('consultations'));
    }

    public function Export_consultation_anesthesiste($id)
    {

        $ConsultationAnesthesiste = ConsultationAnesthesiste::with('patient', 'user')->find($id);

        $pdf = PDF::loadView('admin.etats.consultation_anesthesiste', compact('ConsultationAnesthesiste', 'user'));

        $pdf->save(storage_path('consultation_anesthesiste').'.pdf');

        return $pdf->stream('consultation_anesthesiste.pdf');
    }

   

}
