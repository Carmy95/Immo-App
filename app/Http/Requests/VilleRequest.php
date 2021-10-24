<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VilleRequest extends FormRequest
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
            'ville' => 'required | min:2'
        ];
    }

    public function messages()
    {
        return [
            'ville.required' => 'Veuillez entrer le nom de la ville svp !',
            'ville.min' => 'Le nom de la ville doit contenir au moins :min caractères !'
        ];
    }
}
