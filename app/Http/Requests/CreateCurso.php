<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCurso extends FormRequest
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
            'name'        => 'required|max:255',
            'description' => 'required|min:10',
            'category'    => 'required'
        ];
    }

    public function attributes(){
        return [
            'name'        => 'Nombre del curso',
            'description' => 'Descripción del curso',
        ];
    }

    public function messages(){
        return [
            'description.required' => 'La descripción es obligatoria.'
        ];
    }
}
