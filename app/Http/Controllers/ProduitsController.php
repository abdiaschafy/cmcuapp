<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\ProduitRequest;
use App\Produit;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ProduitsController extends Controller
{
    public function index()
    {

        $this->authorize('view', Produit::class);

        $produitCount = Produit::count();

        $produits = Produit::orderBy('id', 'asc')->paginate(10);

        return view('admin.produits.index', compact('produits', 'produitCount'));
    }


    public function create()
    {

        return view('admin.produits.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', Produit::class);

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

        return redirect()->route('produits.index')->with('success', 'Le produit a été ajouté avec succès !');
    }

    public function edit($id)
    {
        $this->authorize('edit', Produit::class);

        $produit = Produit::find($id);

        return view('admin.produits.edit', compact('produit'));
    }


    public function update(ProduitRequest $request, $id)
    {
        $this->authorize('update', $id);

        $produit = Produit::find($id);


        $input = Input::get('qte_stock');
        $nqte = DB::table('produits')->where('qte_stock', $produit->qte_stock)->sum('qte_stock');

        $produit->qte_stock = $input + $nqte;

        Produit::where('id',$id)->first()->update($request->only('categorie', 'qte_alerte', 'prix_unitaire', 'designation', 'qte_stock'));

        return redirect()->route('produits.index')->with('success', 'La mise à jour a bien été éffectuer');
    }


    public function destroy($id)
    {
        $this->authorize('delete', Produit::class);

        $produit = Produit::find($id);
        $produit->delete();

        return redirect()->route('produits.index')->with('success', 'Le produit a bien été supprimé');
    }

    public function stock_pharmaceutique()
    {

        $produits = DB::table('produits')->where('categorie', 'pharmaceutique')->paginate(8);
        $pharmaCount = count($produits);


        return view('admin.produits.pharmaceutique', compact('produits', 'pharmaCount'));
    }


    public function stock_materiel()
    {

        $produits = DB::table('produits')->where('categorie', 'materiel')->paginate(8);

        $materielCount = count($produits);

        return view('admin.produits.materiel', compact('produits', 'materielCount'));

    }

    public function add_to_cart(Request $request, $id)
    {
        $produit = Produit::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart =new Cart($oldCart);
        $cart->add($produit, $produit->id);

        $request->session()->put('cart', $cart);

        return redirect()->route('produits.pharmaceutique');
    }

    public function facturation()
    {

        if(!Session::has('cart')){

            return view('admin.produits.facturation');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $produit = DB::table('produits')->where('id', $cart);
//        dd($produits);

        return view('admin.produits.facturation', ['produit' => $produit, 'produits' => $cart->items, 'totalPrix' => $cart->totalPrix]);
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new  Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0)
        {
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }

        return redirect()->route('pharmaceutique.facturation');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new  Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0)
        {
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }

        return redirect()->route('pharmaceutique.facturation');
    }


    public function export_pdf(Request $request)
    {

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $produit = DB::table('produits')->where('id', $cart);
//        $myFile = public_path("dummy_pdf.pdf");
//        $headers = ['Content-Type: application/pdf'];
//        $newName = 'itsolutionstuff-pdf-file-'.time().'.pdf';

        $pdf = PDF::loadView('admin.etats.pharmacie', ['produit' => $produit, 'produits' => $cart->items, 'totalPrix' => $cart->totalPrix]);

        $pdf->save(storage_path('pharmacie').'.pdf');

        Session::forget('cart');
        return $pdf->download('pharmacie.pdf');

//        return redirect()->route('produits.pharmaceutique');
    }
}
