<?php

namespace App\Http\Controllers;

use App\Patient;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function export_pdf()
    {

        $data = Patient::get();

        $pdf = PDF::loadView('etats.consultation', $data);
        $pdf->save(storage_path().'_filename.pdf');


        return $pdf->download('customers.pdf');
    }
}
