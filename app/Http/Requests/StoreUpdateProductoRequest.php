<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'categoria_id' => ['required', 'numeric', 'min:1', 'regex:^\d+$'], //regex:^\d+$ enteros positivo
            'nombre' => ['required', 'string', 'max:255'],
            'precio' => ['required', 'numeric', 'between:0,9999999999.99'], //regex:/^\d+(\.\d{1,3})?$/ precio con 3 decimales
            'stock' => ['required', 'numeric', 'gt:0'],
        ];
    }
}
