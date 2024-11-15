<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Mensaje extends Model
{
    use HasFactory;
    // Instancio la tabla 'productos'
 protected $table = 'mensajes';
 
 // Declaro los campos que usaré de la tabla 'productos'
 protected $fillable = ['users_id', 'nombre', 'mensaje'];
}