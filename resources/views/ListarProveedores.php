<!-- resources/views/proveedores/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Proveedores</h1>
    <a href="{{ route('proveedores.create') }}" class="btn btn-primary mb-3">Agregar Proveedor</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>

        
            <tr>
                <th>ID Proveedor</th>
                <th>Nombre</th>
                <th>Fecha de Registro</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->id_proveedor }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->fechaRegistro }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->correo }}</td>
                    <td>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
