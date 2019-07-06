<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests\ImagRequest;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades;

class PatientimageController extends Controller
{
    public function index()
    {
        $patients = Patient::with('users')->latest()->paginate(8);
        return view('admin.examens.index', compact('patients'));

    }


    public function create(Patient $patient)
    {
        return view('admin.examens.create', compact('patient'));
    }


    public function store(ImagRequest $request, Patient $patient)
    {

        $patient = Patient::findOrFail($request->patient_id);
        
        Image::create([
            'patient_id' => request('patient_id'),
            'titre' => request('titre'),
            //'image' => request('image')
            ]);

      if ($request->hasFile('image')){
            $image = $request->file('image') ;
            $filename['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename['imagename']);
            Image::make($image)->resize(800, 400)->save($location);
            $image->image = $filename['imagename'];

            $image->save();
       }
           
        return redirect()->route('examens.index')->with('success', 'examen ajouté avec succès !');
    }
   
    
}
