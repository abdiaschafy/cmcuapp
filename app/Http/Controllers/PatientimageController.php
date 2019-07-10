<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Http\Requests\ImagRequest;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Request;
use DB;
use App\Examen;

class PatientimageController extends Controller
{
    public function index()
    {
        $patients = Patient::with('examens')->get();
        
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
            $filename['image'] = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename['image']);
            Image::make($image)->resize(800, 400)->save($location);
            $examens->image = $filename['image'];
            $examens->save();
    
           
        return redirect()->route('examens.index')->with('success', 'examen ajouté avec succès !');
    }

    public function show(Request $request, $id){
        
        $examens = Examen::find($id);
        return view('admin.examens.show', compact('examens'));
    }

    public function showall(Patient $patient ){
       
        $patients = Patient::with('examens')->where('id', $patient->id)->get();
        

        return view('admin.examens.index', compact('patients','examens'));
    }
   
    
}
