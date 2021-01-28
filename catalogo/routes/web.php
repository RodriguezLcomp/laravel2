<?php

use App\Http\Controllers\MarcaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// use App\Http\Controllers\MarcaController;
//No funcion el use App

####### CRUD de marcas
Route::get('/adminMarcas', [ MarcaController::class, 'index' ] );

use App\Http\Controllers\CategoriaController;

Route::get('/adminCategoria', [CategoriaController::class, 'index']);
