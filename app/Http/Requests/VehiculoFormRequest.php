<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'placa' => 'required',
            'marca' => 'required',
            'color' => 'required',
            'modelo' => 'required',
            'cc' => 'required',
            'año' => 'required',
            'kilometraje' => 'required',
            'tipo_combustible' => 'required',
            'ultimo_mantenimiento' => 'required',
            'tipo_vehiculo' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'placa' => 'El campo Nombre DE TALLER no puede estar vacio',
            'marca' => 'El campo RUNT no puede estar vacio',
            'color' => 'El campo CAMARA COMERCIO no puede estar vacio',
            'modelo' => 'El campo DIRECCIÓN no puede estar vacio',
            'cc' => 'El campo TIPO_TALLER no puede estar vacio',
            'año' => 'El campo TIPO_TALLER no puede estar vacio',
            'kilometraje' => 'El campo TIPO_TALLER no puede estar vacio',
            'tipo_combustble' => 'El campo TIPO_TALLER no puede estar vacio',
            'ultimo_mantenimiento' => 'El campo TIPO_TALLER no puede estar vacio',
            'tipo_vehiculo' => 'El campo TIPO_TALLER no puede estar vacio',
        ];
    } 
}
