<?php

namespace App\Http\Controllers;

use App\Parametre;
use App\Patient;
use Illuminate\Http\Request;

class ParametresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $patient = Patient::find(2);

        $request->validate([
            'patient_id'=> '',
            'poids'=> 'required',
            'tenssion'=> 'required',
            'temperature'=> 'required',
        ]);

        $parametres = new Parametre();

        $parametres->poids = $request->get('poids');
        $parametres->tenssion = $request->get('tenssion');
        $parametres->temperature = $request->get('temperature');

        $parametres->patient_id = $patient->id;

        $parametres->save();

        return redirect()->route('consultations.create')->with('success', 'Le patient a été ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
