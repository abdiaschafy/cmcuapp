<?php

namespace App\Http\Controllers;

use App\FactureConsultation;
use Barryvdh\DomPDF\Facade as PDF;
use App\Patient;
use App\User;

class FactureConsultationController extends Controller
{

    public function index(Patient $patient)
    {
        $this->authorize('view', User::class);
        $factureConsultations = FactureConsultation::with('patient')->get();

        return view('admin.factures.consultation', compact('factureConsultations'));
    }

    public function export_consultation($id)
    {
        $this->authorize('update', Patient::class);
        $this->authorize('print', Patient::class);
        $patient = Patient::find($id);

        $pdf = PDF::loadView('admin.etats.consultation', ['patient' => $patient]);


        $pdf->save(storage_path('pdf/consultation').'.pdf');

        return $pdf->stream('consultation.pdf');
    }
}
