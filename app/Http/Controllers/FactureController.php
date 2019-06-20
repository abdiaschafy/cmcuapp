<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Facture;
use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FactureController extends Controller
{

    public function index(Request $request)
    {
        $factures = Facture::paginate(100);
        $months = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'];

        return view('admin.factures.index', compact('factures', 'months'));
    }

    public function desroy(Facture $factures)
    {
        $factures->delete();
        return view('admin.factures.index')->with('info', 'La facture à bien été supprimer');
    }

    public function ajax()
    {
        $factures = Facture::all();

        $months = $factures->sortBy('created_at')->pluck('created_at')->unique();

        return view('admin.factures.index', compact('factures', 'months'));
    }

    public function show(Facture $facture, Produit $produit)
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('admin.factures.show', [
            'produit' => $produit,
            'produits' => $cart->items,
            'totalPrix' => $cart->totalPrix,
            'facture' => $facture
        ]);
    }

}
