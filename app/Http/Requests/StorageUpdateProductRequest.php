<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorageUpdateProductRequest extends FormRequest
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
                'name'=>'required|min:3|max:255|unique:products',
                'description'=>'required|max:10000',
                'valor'=>'required',
                'photo'=>'nullable|image|',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Nome é obrigatorio',
            'name.unique'=>'Esse produto já existe',
            'description.required' =>'Ops! insira uma descrição para o seu produto!',
            'valor.required'=>'Insira um valor para o seu produto!',
        ];
    }
}
