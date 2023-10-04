<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'inicio')->name('apodoInicio');
Route::view('/vista1', 'Vista1')->name('apodoVista1');
Route::get('/vista2', function () {
    return view('vista2');
});
Route::get('/vista3', function () {
    return view('vista3');
});