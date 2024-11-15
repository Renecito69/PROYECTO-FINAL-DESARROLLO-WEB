<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitaFormRequest extends FormRequest
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
            'nombre' => 'required',
            'placa' => 'required', 
            'tipo_vehiculo' => 'required', 
            'tipo_taller' => 'required', 
            'fecha' => 'required',
            'taller' => 'required', 
                 
        ];
    }
    public function messages() {

    return [
    'nombre' => 'El campo Nombre no puede estar vacio',
    'placa' => 'El campo placa no puede estar vacio', 
    'tipo_vehiculo' => 'El campo Tipo vehiculo no puede estar vacio', 
    'tipo_taller' => 'El campo Tipo de taller no puede estar vacio', 
    'fecha'=>'Por favor seleccione una fecha',
    'taller'=>'Por favor seleccione un taeller',
    ];
    }
}

