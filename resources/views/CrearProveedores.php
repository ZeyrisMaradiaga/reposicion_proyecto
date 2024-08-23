<!-- resources/views/proveedores/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Nuevo Proveedor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('proveedores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_proveedor">ID Proveedor</label>
            <input type="number" class="form-control" id="id_proveedor" name="id_proveedor" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="fechaRegistro">Fecha de Registro</label>
            <input type="date" class="form-control" id="fechaRegistro" name="fechaRegistro" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Proveedor</button>
    </form>
</div>
@endsection
