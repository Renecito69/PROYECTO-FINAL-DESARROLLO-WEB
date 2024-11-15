<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;

    protected $table = 'mantenimiento';

    protected $fillable = ['placa','kilometraje','ultimo_mantenimiento','tipo_vehiculo','tipo_taller'];
}