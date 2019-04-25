<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;

class ProduitController extends Controller
{

    public function index()
    {
       $produitCount = Produit::count();

       //return $produitCount;
     $produits = Produit::orderBy('id', 'asc')->paginate(10);
     return view('admin.produit.index', compact('produits', 'produitCount'));

        $total = DB::table('produits')->where('designation', '=', 'ABACAVIR')->sum('qte_stock');
        //$total = ('Input::get')->sum('qte_stock');

       // return $total;

    }


    public function create()
    {

        return view('admin.produit.create');
    }

    public function store(Request $request)
    {
      $request->validate([
          'designation'=>'required',
          'categorie'=> 'required',
          'qte_alerte'=> 'required',
          'qte_stock'=> 'required',
          'prix_unitaire'=> 'required|integer'
      ]);
        $produit = new Produit();
        $produit->designation = $request->get('designation');
        $produit->categorie = $request->get('categorie');
        $produit->qte_stock = $request->get('qte_stock');
        $produit->qte_alerte = $request->get('qte_alerte');
        $produit->prix_unitaire = $request->get('prix_unitaire');
        $produit->user_id = Auth::id();
        $produit->save();

      return redirect()->route('produit.index')->with('success', 'Le produit a été ajouté avec succès !');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $produit = Produit::find($id);

        return view('admin.produit.edit', compact('produit'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'designation'=> ['required'],
            'categorie'=> ['required'],
            'qte_stock'=> ['required', 'integer', 'numeric'],
            'qte_alerte'=> ['required', 'integer', 'numeric'],
            'prix_unitaire'=> ['required', 'integer', 'numeric'],
        ]);

        $produit = Produit::find($id);

        $produit->designation = $request->get('designation');
        $produit->categorie = $request->get('categorie');

        $input = Input::get('qte_stock');
        $nqte = DB::table('produits')->where('qte_stock', $produit->qte_stock)->sum('qte_stock');

        $produit->qte_stock = $input + $nqte;

        $produit->qte_alerte = $request->get('qte_alerte');
        $produit->prix_unitaire = $request->get('prix_unitaire');
        $produit->user_id = Auth::id();
        $produit->save();

        return redirect()->route('produit.index')->with('success', 'La mise à jour a bien été éffectuer');
    }


    public function destroy($id)
    {
        $produit = Produit::find($id);
        $produit->delete();

        return redirect()->route('produit.index')->with('success', 'Le produit a bien été supprimé');
    }

    public function stock_pharmaceutique()
    {
      
        $produits = DB::table('produits')->where('categorie', 'pharmaceutique')->paginate(8);
        $pharmaCount = count($produits);


        return view('admin.produit.pharmaceutique', compact('produits', 'pharmaCount'));
    }


    public function stock_materiel()
    {

        $produits = DB::table('produits')->where('categorie', 'materiel')->paginate(8);

        $materielCount = count($produits);

        return view('admin.produit.materiel', compact('produits', 'materielCount'));

//        $designation = DB::table('produits')->where('quantite_stock', '1')->get();
//        $qteCount = Count($designation);

    }


}
