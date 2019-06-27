<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'cep' => 'required|max:8|min:8',
            'rua' => 'required|max:250',
            'numero' => 'required',
            'bairro' => 'required|max:100',
            //'endereco_principal' => 'numeric',
            'cidade_id' => 'required|numeric',
            'usuario_id' => 'required|numeric'
        ];
    }
}
