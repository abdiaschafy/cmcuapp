<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'Hématologie' =>'',
            'Hémostase' =>'',
            'Biochimie' =>'',
            'Hormonologie_Sérologie' =>'',
            'Marqueurs_Tumoraux' =>'',
            'Bactériologie_Parasitologie' =>'',
            'Spermiologie' =>'',
            'Urines' =>'',
        ];
    }
}
