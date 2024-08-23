<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProveedorController;

Route::resource('productos', ProductoController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('proveedores', ProveedorController::class);

