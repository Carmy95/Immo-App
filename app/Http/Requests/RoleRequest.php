<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'role' => 'required | min:3'
        ];
    }

    public function messages()
    {
        return [
            'role.required' => 'Veuillez entrer l\'intitulé du rôle svp !',
            'role.min' => 'L\'intitulé du rôle doit contenir au moins :min caractères !'
        ];
    }
}
