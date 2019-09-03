<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Produit;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Devis;
use App\Consultation;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function index(Consultation $consultation)
    {
       
        $devis = Devis::orderBy('id', 'asc')->paginate(100);

        return view('admin.devis.index', compact('devis'));
    }

    public function store(Request $request)
    {

        $this->authorize('create', Devis::class);


        $request->validate([

            //orchidectomie bilaterale
           
            'nom'=> ['required', 'unique:devis'],
            'qte1'=> 'required|integer',
            'qte2'=> 'required|integer',
            'qte3'=> 'required|integer',
            'qte4'=> 'required|integer',
            'qte5'=> 'required|integer',
            'qte6'=> 'required|integer',
            'qte7'=> 'required|integer',
            'prix_u'=> 'required|integer',
            'prix_u1'=> 'required|integer',
            'prix_u2'=> 'required|integer',
            'prix_u3'=> 'required|integer',
            'prix_u4'=> 'required|integer',
            'prix_u5'=> 'required|integer',
            'prix_u6'=> 'required|integer',
            'prix_u7'=> 'required|integer',
            'prix_u8'=> 'required|integer',
            'montant'=> 'required|integer',
            'montant1'=> 'required|integer',
            'montant2'=> 'required|integer',
            'montant3'=> 'required|integer',
            'montant4'=> 'required|integer',
            'montant5'=> 'required|integer',
            'montant6'=> 'required|integer',
            'montant7'=> 'required|integer',
            'montant8'=> 'required|integer',
            'montant9'=> 'required|integer',
            'montant10'=> 'required|integer',
            'montant11'=> 'required|integer',
          

        ]);
        $devis = new Devis();
        $devis->nom = $request->get('nom');
        $devis->qte1 = $request->get('qte1');
        $devis->qte2 = $request->get('qte2');
        $devis->qte3 = $request->get('qte3');
        $devis->qte4 = $request->get('qte4');
        $devis->qte5= $request->get('qte5');
        $devis->qte6 = $request->get('qte6');
        $devis->qte7= $request->get('qte7');
        $devis->prix_u = $request->get('prix_u');
        $devis->prix_u1 = $request->get('prix_u1');
        $devis->prix_u2 = $request->get('prix_u2');
        $devis->prix_u3 = $request->get('prix_u3');
        $devis->prix_u4 = $request->get('prix_u4');
        $devis->prix_u5 = $request->get('prix_u5');
        $devis->prix_u6 = $request->get('prix_u6');
        $devis->prix_u7 = $request->get('prix_u7');
        $devis->prix_u8 = $request->get('prix_u8');
        $devis->montant = $request->get('montant');
        $devis->montant1 = $request->get('montant1');
        $devis->montant2 = $request->get('montant2');
        $devis->montant3 = $request->get('montant3');
        $devis->montant4 = $request->get('montant4');
        $devis->montant5 = $request->get('montant5');
        $devis->montant6 = $request->get('montant6');
        $devis->montant7 = $request->get('montant7');
        $devis->montant8 = $request->get('montant8');
        $devis->montant9 = $request->get('montant9');
        $devis->montant10 = $request->get('montant10');
        $devis->montant11 = $request->get('montant11');
        
       $devis->user_id = Auth::id();
      
        $devis->save();

        return redirect()->route('devis.index')->with('success', 'ajouté avec succès !');
    }
}
