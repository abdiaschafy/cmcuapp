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
            'commentaire'=> 'required',
            'antecedent_m'=> '',
            'antecedent_c'=> '',
            'allergie'=> 'required',
            'groupe'=> 'required',
            'decision'=> 'required',
            'examen_c'=> 'required',
            'examen_p'=> 'required',
            'traitement'=> 'required',
            'cout'=> 'required',
            'motif'=> 'required',
            'medecin'=> 'required',
        ];
    }
}
