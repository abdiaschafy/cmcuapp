<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Facture;
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

}
