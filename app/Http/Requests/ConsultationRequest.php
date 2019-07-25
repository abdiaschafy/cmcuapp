<?php

namespace App\Http\Requests;

use App\Patient;
use Illuminate\Foundation\Http\FormRequest;

class ConsultationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'patient_id' => 'required',
            'diagnostique'=> 'required',
            'interrogatoire'=> 'required',
            'antecedent_m'=> '',
            'antecedent_c'=> '',
            'allergie'=> 'required',
            'groupe'=> 'required',
            'proposition'=> 'required',
            'examen_c'=> 'required',
            'examen_p'=> 'required',
            'traitement'=> 'required',
            'devis_p'=> 'required',
            'motif_c'=> 'required',
            'medecin_r'=> 'required',
            'date_e'=> 'required',
            'date_s'=> 'required',
            'type_e'=> 'required',
            'type_s'=> 'required',
        ];
    }
}
