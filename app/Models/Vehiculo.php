<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';

    protected $fillable = ['placa', 'marca', 'color', 'modelo', 'cc', 'año', 'kilometraje', 'tipo_combustible', 'ultimo_mantenimiento', 'tipo_vehiculo'];
}
