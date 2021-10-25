<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BienRequest extends FormRequest
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
            'prix' => 'required | integer',
            'superficie' => 'required | integer',
            'titre' => 'required | min:3',
            'quatier' => 'required',
            'etat' => 'required',
            'description' => 'required | min:10',
        ];
    }

    public function messages()
    {
        return [
            'prix.require' => 'Veillez renseigner le Prix du bien SVP!!',
            'prix.integer' => 'le prix doit être un nombre entier SVP!!',
            'superficie.required' => 'Veillez renseigner la superficie du bien bien SVP!!',
            'superficie.integer' => 'La superficie doit être un nombre entier SVP!!',
            'titre.required' => 'Veillez renseignez un titre pour votre bien SVP!!',
            'titre.min' => 'Le nombre de caractère du titre doit être au moin min:3',
            'quatier.required' => 'Veillez selectionner un quatier SVP!!',
            'etat.required' => 'Veillez selectionner un etat SVP!!',
            'description.required' => 'Veillez renseigner une description du bien SVP!!',
            'description.min' => 'le nombre de caractère de la description doit être au moin min:10',
        ];
    }
}
