<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests\ImagRequest;
use App\Http\Controllers\Controller;

class PatientimageController extends Controller
{
    public function index()
    {
        $patients = Patient::with('users')->latest()->paginate(8);
        return view('admin.examens.index', compact('patients'));

    }


    public function create(Patient $patient)
    {
       // $patients=Patient::pluck('name','id');
        return view('admin.examens.create', compact('patients'));
    }


    public function store(ImagRequest $request)
    {

//        $this->authorize('consulter', Patient::class);
       

            $images = new Image();
            $images->image = $request->get('image');
            //$patient->user_id = Auth::id();

            // ($request->hasFile('image')){
                $image = $request->file('image');
                $filename['imagename'] = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/' . $filename['imagename']);
                Image::make($image)->resize(800, 400)->save($location);
                $images->image = $filename['imagename'];

        $images->save();

        return redirect()->route('examens.index')->with('success', 'examen ajouté avec succès !');
    }
   
    
}
