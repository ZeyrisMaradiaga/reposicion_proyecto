<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'empleados';

    // La clave primaria no es 'id' por defecto, la cambiamos
    protected $primaryKey = 'id_prestamo';

    // Laravel no manejará el incremento automático de la clave primaria
    public $incrementing = false;

    // El tipo de clave primaria no es entero
    protected $keyType = 'integer';

    // Atributos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'apellido',
        'fechaIngreso',
        'salario'
    ];

    // Atributos que no deben ser considerados en las operaciones de arrays o JSON
    protected $hidden = [];
}
