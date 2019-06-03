<?php

namespace App\Http\Controllers;

use App\Facture;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class FactureController extends Controller
{

    public function index(Request $request)
    {
        $factures = Facture::paginate(5);

        return view('admin.factures.index', compact('factures'));
    }

}
