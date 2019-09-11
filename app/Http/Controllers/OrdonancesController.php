<?php

namespace App\Http\Controllers;

use App\Ordonance;
use App\Patient;
use Illuminate\Http\Request;

class OrdonancesController extends Controller
{

    public function store(Request $request)
    {
        $patient = Patient::findOrFail($request->patient_id);

        Ordonance::create([
            'user_id' => auth()->id(),
            'patient_id' => $patient->id,
            'description'=> request('description'),
            'medicament'=> request('medicament'),
            'quantite'=> request('quantite'),

        ]);

        Flashy('La nouvelle ordonance a été crée avec succès !!');

        return back();
    }

    public function export_pdf($id)
    {

        $ordonance = Ordonance::find($id);
        $pdf = \PDF::loadView('admin.etats.ordonance', compact('ordonance'));

        $pdf->save(storage_path('ordonance').'.pdf');

        return $pdf->download('ordonance.pdf');
    }

}
