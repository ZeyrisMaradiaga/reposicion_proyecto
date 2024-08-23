<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    // Método para listar todos los empleados
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    // Método para mostrar el formulario de creación de empleado
    public function create()
    {
        return view('empleados.create');
    }

    // Método para almacenar un nuevo empleado
    public function store(Request $request)
    {
        $request->validate([
            'id_prestamo' => 'required|integer|unique:empleados,id_prestamo',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'fechaIngreso' => 'required|date',
            'salario' => 'required|numeric',
        ]);

        Empleado::create($request->all());

        return redirect()->route('empleados.index')
                         ->with('success', 'Empleado creado exitosamente.');
    }

}
