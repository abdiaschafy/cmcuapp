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

            'patient_id'=> 'required',
            'diagnostique'=> 'required|max:255',
            'commentaire'=> 'required|max:255',
            'decision'=> '',
            'cout'=> 'required',
            'dure_intervention'=> '',
            'resultat_examen'=> '',
            'chambre'=> '',
        ];
    }
}
