<?php

namespace App\Http\Controllers;

use App\AdaptationTraitement;
use App\Patient;
use App\Premedication;
use App\TraitementHospitalisation;
use App\VisitePreanesthesique;
use Illuminate\Http\Request;

class AnesthesisteController extends Controller
{

    public function Premdication_Traitement(Patient $patient)
    {
        return view('admin.consultations.premdication_tritement', [
            'patient' => $patient,
            'TraitementHospitalisations' => TraitementHospitalisation::with('patient', 'user')->where('patient_id', '=', $patient->id)->get(),
            'AdaptationTraitements' => AdaptationTraitement::with('patient', 'user')->where('patient_id', '=', $patient->id)->get(),
            'premedications' => Premedication::with('patient', 'user')->where('patient_id', '=', $patient->id)->get(),
        ]);
    }


    public function VisitePreanesthesiqueStore()
    {
        VisitePreanesthesique::create([
            'user_id' => auth()->id(),
            'patient_id' => \request('patient_id'),
            'date_visite' => \request('date_visite'),
            'element_nouveau' => \request('element_nouveau')
        ]);

        Flashy('Les nouveaux éléménts ont bien été pris en compte !!');

        return back();

    }


    public function PremedicationConsignePreparationStore()
    {
        Premedication::create([
            'user_id' => auth()->id(),
            'patient_id' => \request('patient_id'),
            'consigne_ide' => \request('consigne_ide'),
            'preparation' => \request('preparation')
        ]);

        Flashy('Les nouveaux éléménts ont bien été pris en compte !!');

        return back();

    }

    public function TraitementHospitalisationStore()
    {
        TraitementHospitalisation::create([
            'user_id' => auth()->id(),
            'patient_id' => \request('patient_id'),
            'medicament_posologie_dosage' => \request('medicament_posologie_dosage'),
            'duree' => \request('duree'),
            'j' => \request('j'),
            'j0' => \request('j0'),
            'j1' => \request('j1'),
            'j2' => \request('j2'),
            'm' => \request('m'),
            'mi' => \request('mi'),
            'n' => \request('n'),
            's' => \request('s'),
            'm1' => \request('m1'),
            'mi1' => \request('mi1'),
            's1' => \request('s1'),
            'n1' => \request('n1'),
            'date' => \request('date'),
        ]);

        Flashy('Les nouveaux éléménts ont bien été pris en compte !!');

        return back();

    }

    public function AdaptationTraitementPersoStore()
    {
        AdaptationTraitement::create([
            'user_id' => auth()->id(),
            'patient_id' => \request('patient_id'),
            'medicament_posologie_dosage' => \request('medicament_posologie_dosage'),
            'arret' => \request('arret'),
            'poursuivre' => \request('poursuivre'),
            'continuer' => \request('continuer'),
            'j' => \request('j'),
            'j0' => \request('j0'),
            'j1' => \request('j1'),
            'j2' => \request('j2'),
            'm' => \request('m'),
            'mi' => \request('mi'),
            'n' => \request('n'),
            's' => \request('s'),
            'm1' => \request('m1'),
            'mi1' => \request('mi1'),
            's1' => \request('s1'),
            'n1' => \request('n1'),
            'date' => \request('date'),
        ]);

        Flashy('Les nouveaux éléménts ont bien été pris en compte !!');

        return back();

    }

}
