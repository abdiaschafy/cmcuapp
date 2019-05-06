<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chambre;
use Illuminate\Support\Facades\DB;

class ChambresController extends Controller
{

    public function index()
    {

        $chambreCount = Chambre::count();
        $chambre = Chambre::orderBy('id', 'asc')->paginate(8);
        return view('admin.chambres.index',compact('chambre', 'chambreCount'));
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
//            $chambre->user_id = Auth::id();
            $chambre->save();
        return  redirect()->route('chambres.index')->with('success', 'chambre ajoutée avec succes');
    }


    public function show($id)
    {
        //
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

    public function chambres_classique()
    {

        $chambre = DB::table('chambres')->where('categorie', 'classique')->paginate(8);
        $classiqueCount = count($chambre);


        return view('admin.chambres.classique', compact('chambre', 'classiqueCount'));
    }


    public function chambres_mvp()
    {

        $chambre = DB::table('chambres')->where('categorie', 'mvp')->paginate(8);
        $mvpCount = count($chambre);


        return view('admin.chambres.mvp', compact('chambre', 'mvpCount'));
    }
    public function chambres_vip()
    {

        $chambre = DB::table('chambres')->where('categorie', 'vip')->paginate(8);
        $vipCount = count($chambre);


        return view('admin.chambres.vip', compact('chambre', 'vipCount'));
    }
}
