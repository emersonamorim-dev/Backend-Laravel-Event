<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockSellRequest extends FormRequest
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
            // Defina aqui as regras de validação para a venda de ações.
            // Neste caso, estamos apenas validando a quantidade, mas você pode adicionar mais regras conforme necessário.
            'quantity' => 'required|integer|min:1',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'quantity.required' => 'A quantidade é obrigatória.',
            'quantity.integer' => 'A quantidade deve ser um número inteiro.',
            'quantity.min' => 'A quantidade deve ser pelo menos 1.',
        ];
    }
}
