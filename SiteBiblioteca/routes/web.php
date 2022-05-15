<?php

use App\Http\Controllers\Biblioteca;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [Biblioteca::class, 'index']);

Route::get('/explorer', [Biblioteca::class, 'explorer']);

Route::get('/quemsomos', [Biblioteca::class, 'quemsomos']);

Route::get('/contato', [Biblioteca::class, 'contato']);

Route::get('/login', [Biblioteca::class, 'login']);

Route::get('/cadastro', [Biblioteca::class, 'cadastro']);

Route::get('/perfil', [Biblioteca::class, 'perfil']);

//Route::get('/misterioso', [Biblioteca::class, 'misterioso']);

Route::fallback(function(){
    return view('error');
});