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
            'acte'=> implode(",", $request->acte),
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

        $ConsultationAnesthesiste->save();

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
