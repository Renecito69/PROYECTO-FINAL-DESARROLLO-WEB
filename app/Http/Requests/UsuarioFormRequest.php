<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'fecha_nacimiento' => 'required',
            'celular' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name' => 'El campo Nombre DE Usuario no puede estar vacio',
            'email' => 'El campo Email no puede estar vacio',
            'fecha_nacimiento' => 'El campo Fecha De Nacimiento no puede estar vacio',
            'celular' => 'El campo Celular no puede estar vacio',
            'password' => 'El campo Contraseña no puede estar vacio',
        ];
    } 
}
