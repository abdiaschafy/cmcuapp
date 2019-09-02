<?php

namespace App\Http\Controllers;

use App\Facture;
use App\FactureChambre;
use Barryvdh\DomPDF\Facade as PDF;
use App\FactureConsultation;
use App\Patient;
use App\Produit;
use App\User;
use Illuminate\Http\Request;

class FactureController extends Controller
{

    public function index(Request $request)
    {
        $this->authorize('view', User::class);
        $factures = Facture::paginate(100);

        return view('admin.factures.index', compact('factures'));
    }

    public function destroy(Facture $factures)
    {
        $this->authorize('view', User::class);
        $factures->delete();
        return view('admin.factures.index')->with('info', 'La facture à bien été supprimer');
    }

    public function show(Facture $facture, Produit $produit)
    {
        $factures = Facture::find($facture);

        return view('admin.factures.show', [
            'facture' => $facture
        ]);
    }

    public function FactureConsultation(Patient $patient)
    {
        $this->authorize('view', User::class);
        $factureConsultations = FactureConsultation::with('patient')->get();

        return view('admin.factures.consultation', compact('factureConsultations'));
    }

    public function FactureChambre(Patient $patient)
    {
        $this->authorize('view', User::class);
        $factureChambres = FactureChambre::with('patient')->get();

        return view('admin.factures.chambre', compact('factureChambres'));
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
