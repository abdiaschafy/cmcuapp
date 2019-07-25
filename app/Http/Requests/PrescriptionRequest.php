<?php

namespace App\http\Requests;

use Illuminate\Foundation\http\FormRequest;

class PrescriptionRequest extends FormRequest
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
            'patient_id' =>'',
            'hematologie' =>'',
            'hemostase' =>'',
            'biochimie' =>'',
            'hormonologie_serologie' =>'',
            'marqueurs_Tumoraux' =>'',
            'bacteriologie_Parasitologie' =>'',
            'spermiologie' =>'',
            'urines' =>'',
           'serologie' =>'',
           'examen' =>'',
        ];
    }
}
