<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    // Método para listar todos los productos
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    // Método para mostrar el formulario de creación de producto
    public function create()
    {
        return view('productos.create');
    }

    // Método para almacenar un nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'pagaIsv' => 'required|boolean',
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index')
                         ->with('success', 'Producto creado exitosamente.');
    }

    // Método para mostrar un producto específico (opcional)
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    // Método para mostrar el formulario de edición de un producto (opcional)
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    // Método para actualizar un producto específico (opcional)
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'pagaIsv' => 'required|boolean',
        ]);

        $producto->update($request->all());

        return redirect()->route('productos.index')
                         ->with('success', 'Producto actualizado exitosamente.');
    }

    // Método para eliminar un producto específico (opcional)
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')
                         ->with('success', 'Producto eliminado exitosamente.');
    }
}
