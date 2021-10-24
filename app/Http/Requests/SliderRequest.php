<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'photo'      => 'required',
            'titre'      => 'required | min:3',
            'date_debut' => 'required'
        ];
    }

    public function message()
    {
        return [
            'photo.required' => 'Vous devez ajouter une photo pour ulustrer votre slider svp!!',
            'titre.required' => 'Vous devez donner un nom à votre slider svp!!',
            'titre.min' => 'Le titre doit comporter au moins :min caractères',
            'date_debut' => 'Vous devez choisir une date du debut de l\"affichage du slider sur le site'
        ];
    }
}
