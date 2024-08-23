<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Tabla que asociada al modelo
    protected $table = 'productos';

    // Atributos que se pueden asignar masivamente
    protected $fillable = [
        'descripcion',
        'precio',
        'stock',
        'pagaIsv'
    ];

    // Atributo que no debe ser considerados en las operaciones de arrays o JSON
    protected $hidden = [];


}
