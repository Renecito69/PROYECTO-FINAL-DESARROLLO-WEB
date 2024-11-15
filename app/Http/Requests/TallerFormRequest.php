<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TallerFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'nombre_taller' => 'required',
            'runt' => 'required',
            'camara_comercio' => 'required',
            'direccion' => 'required',
            'tipo_taller' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre_taller' => 'El campo Nombre DE TALLER no puede estar vacio',
            'runt' => 'El campo RUNT no puede estar vacio',
            'camara_comercio' => 'El campo CAMARA COMERCIO no puede estar vacio',
            'direccion' => 'El campo DIRECCIÓN no puede estar vacio',
            'tipo_taller' => 'El campo TIPO_TALLER no puede estar vacio',
        ];
    } 



}