<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\AccidenteLaboralController;

Route::get('/empleado/create', [EmpleadoController::class, 'create'])->name('empleado.create');
Route::post('/empleado/store', [EmpleadoController::class, 'store'])->name('empleado.store');

Route::get('/cargos/create', [CargoController::class, 'create'])->name('cargos.create');
Route::post('/cargos/store', [CargoController::class, 'store'])->name('cargos.store');

Route::get('/contratos/create', [ContratoController::class, 'create'])->name('contratos.create');
Route::post('/contratos/store', [ContratoController::class, 'store'])->name('contratos.store');

Route::get('/accidentes/create', [AccidenteLaboralController::class, 'create'])->name('accidentes.create');
Route::post('/accidentes/store', [AccidenteLaboralController::class, 'store'])->name('accidentes.store');