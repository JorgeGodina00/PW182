<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*

Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[diarioController::class, 'metodoInicio'])->name('apodoInicio');
Route::get('/formulario',[diarioController::class, 'metodoFormulario'])->name('apodoFormulario');
Route::get('/recuerdo',[diarioController::class, 'metodoRecuerdo'])->name('apodoRecuerdo');
Route::post('/guardarRecuerdo',[diarioController::class, 'metodoGuardar'])->name('guardar');

/*
//Rutas Agrupadas tipo controlador

Route::controller(diarioController::class)->group(function(){
    Route::get('/', 'metodoInicio')->name('apodoInicio');
    Route::get('/formulario', 'metodoFormulario')->name('apodoFormulario');
    Route::get('/recuerdos', 'metodoRecuerdo')->name('apodoRecuerdo');
});
*/