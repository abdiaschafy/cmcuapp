<?php

namespace App\Http\Controllers;

use App\Devisd;
use\App\Devis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class DevisdController extends Controller
{
    public function index()
    {
       
        $devisd = Devisd::orderBy('id', 'asc')->paginate(100);

        return view('admin.devisd.index', compact('devisd'));
    }

    public function create()
    {
        $devis = Devis::all();
        return view('admin.devisd.create', compact('devis'));
    }


    public function store(Request $request)
    {



        $request->validate([
           
            'nom'=> ['', 'unique:devis'],
            'qte1'=> '',
            'qte2'=> '',
            'qte3'=> '',
            'qte4'=> '',
            'qte5'=> '',
            'qte6'=> '',
            'qte7'=> '',
            'qte8'=> '',
            'qte9'=> '',
            'qte10'=> '',
            'qte11'=> '',

            'prix_u'=> '',
            'prix_u1'=> '',
            'prix_u2'=> '',
            'prix_u3'=> '',
            'prix_u4'=> '',
            'prix_u5'=> '',
            'prix_u6'=> '',
            'prix_u7'=> '',
            'prix_u8'=> '',
            'prix_u9'=> '',
            'prix_u10'=> '',

            'montant'=> '',
            'montant1'=> '',
            'montant2'=> '',
            'montant3'=> '',
            'montant4'=> '',
            'montant5'=> '',
            'montant6'=> '',
            'montant7'=> '',
            'montant8'=> '',
            'montant9'=> '',
            'montant10'=> '',
            
            'elements'=> '',
            'elements1'=> '',
            'elements2'=> '',
            'elements3'=> '',
            'elements4'=> '',
            'elements5'=> '',
            'elements6'=> '',
            'elements7'=> '',
            'elements8'=> '',
            'elements9'=> '',
            'elements10'=> '',
            'arreter'=> '',
            'total1'=> '',
            'total2'=> '',
            'total3'=> '',



        ]);
        $devisd = new Devis();
        $devisd->nom = $request->get('nom');
        $devisd->qte1 = $request->get('qte1');
        $devisd->qte2 = $request->get('qte2');
        $devisd->qte3 = $request->get('qte3');
        $devisd->qte4 = $request->get('qte4');
        $devisd->qte5= $request->get('qte5');
        $devisd->qte6 = $request->get('qte6');
        $devisd->qte7= $request->get('qte7');
        $devisd->qte8= $request->get('qte8');
        $devisd->qte9= $request->get('qte9');
        $devisd->qte10= $request->get('qte10');
        $devisd->qte11= $request->get('qte11');

        $devisd->prix_u = $request->get('prix_u');
        $devisd->prix_u1 = $request->get('prix_u1');
        $devisd->prix_u2 = $request->get('prix_u2');
        $devisd->prix_u3 = $request->get('prix_u3');
        $devisd->prix_u4 = $request->get('prix_u4');
        $devisd->prix_u5 = $request->get('prix_u5');
        $devisd->prix_u6 = $request->get('prix_u6');
        $devisd->prix_u7 = $request->get('prix_u7');
        $devisd->prix_u8 = $request->get('prix_u8');
        $devisd->prix_u9 = $request->get('prix_u9');
        $devisd->prix_u10 = $request->get('prix_u10');

        $devisd->montant = ((int)$request->get('qte1') * (int)$request->get('prix_u'));
        $devisd->montant1 = ((int)$request->get('qte2') * (int)$request->get('prix_u1'));
        $devisd->montant2 = ((int)$request->get('qte3')  * (int)$request->get('prix_u2'));
        $devisd->montant3 =( (int)$request->get('qte4') * (int)$request->get('prix_u3'));
        $devisd->montant4 = ((int)$request->get('qte5') * (int)$request->get('prix_u4'));
        $devisd->montant5 = ((int)$request->get('qte6') * (int)$request->get('prix_u5'));
        $devisd->montant6 = ((int)$request->get('qte7') * (int)$request->get('prix_u6'));
        $devisd->montant7 = ((int)$request->get('qte8') * (int)$request->get('prix_u7'));
        $devisd->montant8 = ((int)$request->get('qte9') * (int)$request->get('prix_u8'));
        $devisd->montant9 = ((int)$request->get('qte10') * (int)$request->get('prix_u9'));
        $devisd->montant10 = ((int)$request->get('qte11') * (int)$request->get('prix_u10'));
        
        $devisd->elements = $request->get('elements');
        $devisd->elements1 = $request->get('elements1');
        $devisd->elements2 = $request->get('elements2');
        $devisd->elements3 = $request->get('elements3');
        $devisd->elements4 = $request->get('elements4');
        $devisd->elements5 = $request->get('elements5');
        $devisd->elements6 = $request->get('elements6');
        $devisd->elements7 = $request->get('elements7');
        $devisd->elements8 = $request->get('elements8');
        $devisd->elements9 = $request->get('elements9');
        $devisd->elements10 = $request->get('elements10');
        $devisd->arreter = $request->get('arreter');

        $devisd->total1 = $devisd->montant + $devisd->montant1 + $devisd->montant2 + $devisd->montant3 + 
        $devisd->montant4 + $devisd->montant5 + $devisd->montant5 +  $devisd->montant6;

        $devisd->total2 =$devisd->montant7 + $devisd->montant8 + $devisd->montant9 + $devisd->montant10;
        $devisd->total3 = $devisd->total1 +  $devisd->total2;

        $devisd->patient_id = $request->patient_id;
        $devisd->user_id = Auth::id();
         $devisd->save();

        return redirect()->route('devis.index')->with('success', 'ajouté avec succès !');
    }

    public function export_devisd($id)
    {

        $devisd = Devisd::find($id);

        $pdf = PDF::loadView('admin.etats.devisd', compact('devisd'));

        return $pdf->stream('devisd.pdf');
    }
}
