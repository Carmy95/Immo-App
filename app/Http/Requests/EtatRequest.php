<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'etat' => 'required | min:2'
        ];
    }

    public function messages()
    {
        return [
            'etat.required' => 'Veuillez entrer l\'intitulé de l\'état svp !',
            'etat.min' => 'L\'intitulé de l\'état doit contenir au moins :min caractères !'
        ];
    }
}
