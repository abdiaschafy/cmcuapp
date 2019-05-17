<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chambre;
use Illuminate\Support\Facades\Auth;

class ChambresController extends Controller
{

    public function index()
    {
        $chambres = new Chambre;

        if (\request()->has('categorie')){

            $chambres = $chambres->where('categorie', request('categorie'));
        }

        if (\request()->has('order')) {

            $chambres = $chambres->orderBy('id', \request('order'));
        }

        $chambres = $chambres->paginate(5)->appends([

            'categorie' => \request('categorie'),
            'order' => \request('order'),
        ]);

        return view('admin.chambres.index',compact('chambres'));
    }


    public function create()
    {
       return view('admin.chambres.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'numero'=>'required|integer',
            'categorie'=> 'required|string',
            'prix'=>'required|integer'
        ]);

        $chambre = new Chambre();

            $chambre->numero = $request->get('numero');
            $chambre->categorie = $request->get('categorie');
            $chambre->prix = $request->get('prix');
            $chambre->user_id = Auth::id();
            $chambre->save();
        return  redirect()->route('chambres.index')->with('success', 'chambre ajoutée avec succes');
    }


    public function search()
    {
        $chambres = Chambre::search(request('search'))->paginate(5);
//dd($chambres);
//        if ($request->has('search')) {
//
//            $chambres->where('numero', $request->input('search'));
//        }
//        $chambres = Chambre::search('numero')->paginate(5);

        return view('admin.chambres.index', ['chambres' => $chambres]);
    }


    public function edit($id)
    {
        $chambre = Chambre::find($id);

        return view('admin.chambres.edit', compact('chambre'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'numero'=> ['required'],
            'categorie'=> ['required'],
            'prix'=> ['required', 'integer', 'numeric'],

        ]);

        $chambre = Chambre::find($id);

        $chambre->numero = $request->get('numero');
        $chambre->categorie = $request->get('categorie');
        $chambre->prix = $request->get('prix');


//        $chambre->user_id = Auth::id();

        $chambre->save();

        return redirect()->route('chambres.index')->with('success', 'La mise à jour a bien été éffectuer');
    }


    public function destroy($id)
    {
        //
    }

}
