<!-- resources/views/empleados/index.blade.php -->
@extends('layouts.app')






@section('content')
<div class="container">
    <h1>Lista de Empleados</h1>
    <a href="{{ route('empleados.create') }}" class="btn btn-primary mb-3">Agregar Empleado</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Préstamo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Ingreso</th>
                <th>Salario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->id_prestamo }}</td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellido }}</td>
                    <td>{{ $empleado->fechaIngreso }}</td>
                    <td>{{ $empleado->salario }}</td>
                    <td>
                        <!-- Aquí puedes añadir más acciones como Editar y Eliminar -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
