<!-- resources/views/productos/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Productos</h1>
    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Agregar Producto</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Paga ISV</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>{{ $producto->pagaIsv ? 'Sí' : 'No' }}</td>
                    <td>
                        <!-- Aquí puedes añadir más acciones como Editar y Eliminar -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
