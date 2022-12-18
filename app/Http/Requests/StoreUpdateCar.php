<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCar extends FormRequest
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
        $id = $this->segment(2);
        
        return [
            'marca' => "required|min:3|max:255|unique:cars,marca,{$id},id",
            'modelo' => "required|min:3|max:255|unique:cars,modelo,{$id},id",
            'versao' => "required|min:3|max:255|unique:cars,versao,{$id},id",
            // 'email' => "required|email|unique:cars,email,{$id},id",
        ];
    }

    public function messages(){
        return [
            'required' => 'O campo ":attribute" é obrigatório!',
            'numeric' => 'O campo ":attribute" deve ser um número!',
            'min' => 'O campo ":attribute" deve ter no mínimo :min caracteres!',
            'max' => 'O campo ":attribute" deve ter no maximo :max caracteres!',
            'type.required' => 'O campo "tipo" é obrigatório!',
            'unique' => 'Este ":attribute" não se encontra disponivel no momento!'
        ];
    }
}
