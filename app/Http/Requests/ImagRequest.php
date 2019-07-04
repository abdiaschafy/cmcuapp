<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImagRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image'=>'image|mimes:png,jpg,jpeg|max:10000',
            'patient_id' => $patients->id,
           
            
        ];
    }
}
