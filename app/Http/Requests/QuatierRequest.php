<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuatierRequest extends FormRequest
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
            'commune' => 'required',
            'quatier' => 'required | min:3'
        ];
    }

    public function message()
    {
        return [
            'commune.required' => 'Veillez sélectionnez une commune SVP!!',
            'quatier.required' => 'Le nom du quatier est obligatoire SVP!!',
            'quatier.min' => 'Le nom du quatier doit comporter au moins :min caractères.'
        ];
    }
}
