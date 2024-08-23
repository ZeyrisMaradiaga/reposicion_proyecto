<!-- resources/views/empleados/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Nuevo Empleado</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_prestamo">ID Préstamo</label>
            <input type="number" class="form-control" id="id_prestamo" name="id_prestamo" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="fechaIngreso">Fecha de Ingreso</label>
            <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" required>
        </div>
        <div class="form-group">
            <label for="salario">Salario</label>
            <input type="number" class="form-control" id="salario" name="salario" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Empleado</button>
    </form>
</div>
@endsection
