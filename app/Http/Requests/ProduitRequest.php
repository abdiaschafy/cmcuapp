<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
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
            'designation'=> ['required'],
            'categorie'=> ['required'],
            'qte_stock'=> ['required', 'integer', 'numeric'],
            'qte_alerte'=> ['required', 'integer', 'numeric'],
            'prix_unitaire'=> ['required', 'integer', 'numeric'],
        ];
    }
}
