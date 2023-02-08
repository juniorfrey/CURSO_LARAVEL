<?php

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
    //return view('welcome');
    return "Bienvenido a la pagina web de Fredys";
});

Route::get('/segunda', function () {
    return "MI SEGUNDA RUTA";
});

/* Route::get('cursos/{curso}', function ($curso) {
    return "Bienvenido al curso: $curso";
}); */

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    return $categoria ? "Bienvenido al curso: $curso de la categoria: $categoria" : "Bienvenido al curso: $curso";
});

Route::get('curso/api/crear', function () {
     return "En esta pagina podras crear un curso";
});
