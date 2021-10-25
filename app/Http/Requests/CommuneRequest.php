<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommuneRequest extends FormRequest
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
            'ville' => 'required',
            'commune' => 'required | min:3'
        ];
    }

    public function message()
    {
        return [
            'ville.required' => 'Veillez sélectionnez une ville SVP!!',
            'commune.required' => 'Le nom de la commune est obligatoire SVP!!',
            'commune.min' => 'Le nom de la commune doit comporter au moins :min caractères.'
        ];
    }
}
