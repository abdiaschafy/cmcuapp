<?php

namespace App\Http\Controllers;

use App\FicheIntervention;
use App\Http\Requests\ParametreRequest;
use App\Parametre;
use App\Patient;
use App\SurveillanceRapprocheParametre;
use Carbon\Carbon;
use MercurySeries\Flashy\Flashy;

class ParametresController extends Controller
{

    public function SurveillanceRapprocheParametre(Patient $patient)
    {
        return view('admin.consultations.infirmiers.surveillance_rapproche_param', [

            'patient' => $patient,
            'paramPre' => SurveillanceRapprocheParametre::with('patient')
                            ->where('patient_id', $patient->id)
                            ->where('periode', 'preoperatoire')
                            ->latest()->first(),
            'paramPost' => SurveillanceRapprocheParametre::with('patient')
                ->where('patient_id', $patient->id)
                ->where('periode', 'postoperatoire')
                ->latest()->first(),

            'age_patient' => Parametre::where('patient_id', '=', $patient->id)->latest()->pluck('age'),
            'intervention' => FicheIntervention::where('patient_id', '=', $patient->id)->pluck('type_intervention')
        ]);
    }

    public function IndexSurveillanceRapprocheParametre(Patient $patient)
    {
        return view('admin.consultations.infirmiers.index_surveillance_rapproche_param', [

            'patient' => $patient,
            'paramPosts' => SurveillanceRapprocheParametre::with('patient')
                ->where('patient_id', $patient->id)
                ->where('periode', 'postoperatoire')->get(),

            'paramPres' => SurveillanceRapprocheParametre::with('patient')
                ->where('patient_id', $patient->id)
                ->where('periode', 'preoperatoire')->get()
        ]);
    }

    public function IndexParametrePatient(Patient $patient)
    {
        return view('admin.consultations.infirmiers.index_fiche_parametre', [

            'patient' => $patient,
            'parametres' => Parametre::with('patient')->where('patient_id', '=', $patient->id)->get()
        ]);
    }


    public function fiche_parametre_store(ParametreRequest $request)
    {
        $patient = Patient::findOrFail($request->patient_id);

        Parametre::create([

            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'fr' => request('fr'),
            'fc' => request('fc'),
            'bras_gauche' => request('bras_gauche'),
            'bras_droit' => request('bras_droit'),
            'taille' => request('taille'),
            'inc_bmi' => number_format(request('poids')/((request('taille'))*(request('taille'))), 2),
            'date_naissance' => request('date_naissance'),
            'age' => Carbon::parse(request('date_naissance'))->age,
            'glycemie' => request('glycemie'),
            'spo2' => request('spo2'),
            'poids' => request('poids'),
            'temperature' => request('temperature'),

        ]);

        Flashy('Les nouveaux paramètres ont bien été ajouté avec succès !!');

        return back();
    }

    public function fiche_parametre_update(ParametreRequest $request, Parametre $parametre)
    {

        $parametre->update($request->all());

        Flashy('Les paramètres ont bien été modifiés');

        return back();
    }

    public function SurveillanceRapprocheStore()
    {
        SurveillanceRapprocheParametre::create([

            'patient_id' => request('patient_id'),
            'user_id' => auth()->id(),
            'date' => request('date'),
            'heure' => request('heure'),
            'ta' => request('ta'),
            'fr' => request('fr'),
            'spo2' => request('spo2'),
            'temperature' => request('temperature'),
            'diurese' => request('diurese'),
            'pouls' => request('pouls'),
            'conscience' => request('conscience'),
            'douleur' => request('douleur'),
            'observation_plainte' => request('observation_plainte'),
            'periode' => request('periode'),
        ]);

        Flashy::info('Les paramètres ont été enregistrés');

        return back();
    }
}
