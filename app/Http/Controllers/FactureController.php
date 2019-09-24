<?php

namespace App\Http\Controllers;

use App\Client;
use App\Facture;
use App\FactureChambre;
use Barryvdh\DomPDF\Facade as PDF;
use App\FactureConsultation;
use App\FactureClient;
use App\Patient;
use App\Produit;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function FactureClient()
    {
        $this->authorize('view', User::class);
        $facturesClients = FactureClient::with('client')->get();

        return view('admin.factures.client', compact('facturesClients'));
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

    public function export_client($id)
    {
       

        $client = Client::find($id);

        $pdf = PDF::loadView('admin.etats.clientP', ['client' => $client]);


        $pdf->save(storage_path('pdf/clientP').'.pdf');

        return $pdf->stream('clientP.pdf');
    }

    public function export_bilan_consultation()
    {

        $date_today = Carbon::today()->toDateString();

        $factures = FactureConsultation::with('patient')->where('date_insertion', '=', $date_today)->get();

        $tautaux = DB::table('facture_consultations')->where('date_insertion', '=', $date_today)->sum('montant');
        $avances = DB::table('facture_consultations')->where('date_insertion', '=', $date_today)->sum('avance');
        $restes = DB::table('facture_consultations')->where('date_insertion', '=', $date_today)->sum('reste');
        $assurances = DB::table('facture_consultations')->where('date_insertion', '=', $date_today)->sum('assurancec');
        $patients = DB::table('facture_consultations')->where('date_insertion', '=', $date_today)->sum('assurec');



        $pdf = PDF::loadView('admin.etats.bilan_consultation', [
            'factures' => $factures,
            'tautaux' => $tautaux,
            'avances' => $avances,
            'restes' => $restes,
            'assurances' => $assurances,
            'date_today' => $date_today,
            'patients' => $patients,
        ]);

        $pdf->setPaper('A4', 'landscape');

        return $pdf->stream('bilan_facture_consultation.pdf');
    }

}
