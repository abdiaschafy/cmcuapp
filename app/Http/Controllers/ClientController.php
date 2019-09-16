<?php

namespace App\Http\Controllers;

use App\Client;
use App\Consultation;
use App\FactureClient;
use App\FactureConsultation;
use App\Patient;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\image;



class ClientController extends Controller
{
    public function index()
    {
        $this->authorize('update', Patient::class);
        $clients = Client::with('users')->latest()->paginate(100);
        return view('admin.clients.index', compact('clients'));

    }

    public function create()
    {
       

        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $this->authorize('update', Patient::class);

            $request->validate([
                'nom'=> 'required',
                'prenom'=> '',
                'motif'=> '',
                'montant'=> '',
                'avance'=> '',
                'reste'=> '',
               
            ]);
            $client = new Client();
            $client->nom = $request->get('nom');
            $client->prenom = $request->get('prenom');
            $client->montant = $request->get('montant');
            $client->avance = $request->get('avance');
            $client->reste = $client->montant - $client->avance;
            $client->motif = $request->get('motif');
            $client->user_id = Auth::id();
            $client->save();

        return redirect()->route('clients.index')->with('success', 'Le client a été ajouté avec succès !');
    }

    public function update(Request $request, $id)
    {
        $this->authorize('update', Patient::class);
        $request->validate([
            'nom'=> '',
            'prenom'=> '',
            'motif'=> '',
            'montant'=> '',
            'avance'=> '',
            'reste'=> '',
          
        ]);


        $client = Client::findOrFail($id);
        $client->nom = $request->get('nom');
        $client->prenom = $request->get('prenom');
        $client->motif = $request->get('motif');
        $client->montant = $request->get('montant');
        $client->avance = $request->get('avance');
        $client->reste = $request->get('reste');
        $client->user_id = Auth::id();
        $client->save();

        return redirect()->route('clients.index', $client->id)->with('success', 'Les informations ont été mis à jour avec succès !');
    }
    
    public function destroy(Client $client)
    {
        $this->authorize('update', Patient::class);
        $client->delete();

        return redirect()->route('clients.index')->with('success', "Le client a bien été supprimé");
    }


    public function generate_client($id)
    {
        $this->authorize('update', Patient::class);
        $client = Client::find($id);

        $facture = FactureClient::create([
            
            'client_id' => $client->id,
            'nom' => $client->nom,
            'prenom' => $client->prenom,
            'motif' => $client->motif,
            'montant' => $client->montant,
            'avance' => $client->avance,
            'reste' => $client->reste,
            'user_id' => \auth()->user()->id,
        ]);


        return back()->with('success', 'La facture a bien été généré veuillez consulter votre liste des factures');
    }

    
   


    
}
