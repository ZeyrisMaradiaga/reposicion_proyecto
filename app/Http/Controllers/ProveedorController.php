
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    // Método para listar todos los proveedores
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    // Método para mostrar el formulario de creación de proveedor
    public function create()
    {
        return view('proveedores.create');
    }

    // Método para almacenar un nuevo proveedor
    public function store(Request $request)
    {
        $request->validate([
            'id_proveedor' => 'required|integer|unique:proveedores,id_proveedor',
            'nombre' => 'required|string|max:255',
            'fechaRegistro' => 'required|date',
            'telefono' => 'required|string|max:15',
            'correo' => 'required|string|email|max:255',
        ]);

        Proveedor::create($request->all());

        return redirect()->route('proveedores.index')
                         ->with('success', 'Proveedor creado exitosamente.');
    }

    
}
