<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    // Instancio la tabla 'productos' 
     protected $table = 'citas';
 
 // Declaro los campos que usaré de la tabla 'productos' 
     protected $fillable = ['nombre','placa', 'tipo_vehiculo', 'tipo_taller', 'fecha','taller'];


     public static function contarCitasPorFecha($fecha) {
         $conexion = new PDO("mysql:host=localhost;dbname=nombre_base_datos", "usuario", "contraseña");
        $sql = "SELECT COUNT(*) AS cantidad FROM citas WHERE fecha = :fecha";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado['cantidad'];
    }
}
