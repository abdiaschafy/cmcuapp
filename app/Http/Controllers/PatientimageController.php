<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Http\Requests\ImagRequest;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use DB;
use App\Examen;

class PatientimageController extends Controller
{
    public function index()
    {
        $patients = Patient::with('users')->latest()->paginate(8);
        $examens = Examen::all();
        return view('admin.examens.index', compact('patients','examens'));

    }


    public function create(Patient $patient)
    {
        return view('admin.examens.create', compact('patient'));
    }


    public function store(ImagRequest $request, Patient $patient)
    {

        $patient = Patient::findOrFail($request->patient_id);
       //dd($patient->id);
       $examens = new Examen ();
        
    $examens->type = $request->get('type');
    $examens->patient_id = $request->patient_id;
   // $patient->id = $request->get('patient_id');

            $image = $request->file('image') ;
            $filename['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename['imagename']);
            Image::make($image)->resize(800, 400)->save($location);
            $examens->image = $filename['imagename'];
     
            $examens->save();
    
           
        return redirect()->route('examens.index')->with('success', 'examen ajouté avec succès !');
    }

    public function show(ImagRequest $request, $id){

        $examens = Examen::find($id);

        return view('admin.examens.show');
    }
   
    
}
