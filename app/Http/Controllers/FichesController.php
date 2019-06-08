<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fiche;
use Session;


class FichesController extends Controller
{

    public function index()
    {

        $ficheCount = Fiche::count();
        $fiche = Fiche::orderBy('id', 'asc')->paginate(8);
        return view('admin.fiches.index', compact('fiche', 'ficheCount'));
    }


    public function create()
    {
        return view('admin.fiches.create');
    }


    public function store(Request $request)
    {
        $this->authorize('create', Fiche::class);

        $request->validate([
            'nom'=>'required',
            'prenom'=> 'required',
            'chambre_numero'=> 'required|integer',
            'age'=> 'required|integer',
            'service'=> 'required',
            'infirmier_charge'=> 'required',
            'accueil'=> 'required',
            'restauration'=> 'required',
            'chambre'=> 'required',
            'soins'=> 'required',
            'notes'=> 'required|integer',
            'quizz'=> 'required',
            'remarque_suggestion'=> 'required'

        ]);
        $fiche = new Fiche([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'chambre_numero' => $request->get('chambre_numero'),
            'age' => $request->get('age'),
            'service' => $request->get('service'),
            'infirmier_charge' => $request->get('infirmier_charge'),
            'accueil' => $request->get('accueil'),
            'restauration' => $request->get('restauration'),
            'chambre' => $request->get('chambre'),
            'soins' => $request->get('soins'),
            'notes' => $request->get('notes'),
            'quizz'=> $request->get('quizz'),
            'remarque_suggestion'=> $request->get('remarque_suggestion')

        ]);
        $fiche->save();

        return redirect()->route('fiches.index')->with('success', 'Le produit a été ajouté avec succès !');
    }


    public function show($id)
    {
        $fiche = Fiche::where('id', $id)->first();
        return view('admin.fiches.show', compact('fiche'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $fiche = Fiche::find($id);
        $fiche->delete();

        return redirect()->route('fiches.index')->with('success', 'Le produit a bien été supprimé');
    }

    public function export_pdf($id)
    {

        $fiche = Fiche::find($id);
        $pdf = \PDF::loadView('admin.etats.fiche', compact('fiche'));

        $pdf->save(storage_path('fiche').'.pdf');

//        $content = $pdf->download()->getOriginalContent();
//        Storage::put('public/admin/name.pdf',$content) ;
        return $pdf->stream('fiche.pdf');
        
    }
}
