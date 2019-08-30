<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParametreRequest extends FormRequest
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
            'user_id' => '',
            'patient_id' => 'required',
            'ta' => '',
            'fr' => '',
            'fc' => '',
            'glycemie' => 'required',
            'spo2' => '',
            'poids' => '',
            'temperature' => 'required'
        ];
    }
}
