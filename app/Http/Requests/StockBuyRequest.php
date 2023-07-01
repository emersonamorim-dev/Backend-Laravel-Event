<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockBuyRequest extends FormRequest
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
            // Defina aqui as regras de validação para a compra de ações.
            // Isso é semelhante ao que você tinha no controlador.
            'symbol' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
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
            'symbol.required' => 'O símbolo da ação é obrigatório.',
            'symbol.string' => 'O símbolo da ação deve ser uma string.',
            'price.required' => 'O preço é obrigatório.',
            'price.numeric' => 'O preço deve ser um número.',
            'quantity.required' => 'A quantidade é obrigatória.',
            'quantity.integer' => 'A quantidade deve ser um número inteiro.',
        ];
    }
}
