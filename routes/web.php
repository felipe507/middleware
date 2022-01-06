<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioControlador;
use App\Http\Middleware\PrimeiroMidleware;

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

//chamnando o middleware na rota
//Route::get('/usuarios', [UsuarioControlador::class,'index'])
//->middleware('primeiro');

Route::get('/usuarios', [UsuarioControlador::class,'index'])->middleware('primeiro', 'segundo');

Route::get('/terceira', function () {
    return '<h3>Terceira Middleware</h3>';
})->middleware('terceiro:joao,65');
