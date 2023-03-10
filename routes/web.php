<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;

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

Route::get('/', HomeController::class);
//Route::get('/cursos', [CursosController::class, 'index']);

// Grupos de rutas
//Route::controller(CursosController::class)->group(/* ['prefix' => 'cursos', 'middleware' => 'auth'], */ function (){
    //Route::get('cursos/',  'index')->name('cursos.index');

    //Route::get('cursos/create',  'create')->name('cursos.create'); // Ruta para mostrar la vista de crear cursos.
    //Route::post('cursos', 'store')->name('cursos.store'); // Ruta para crear un nuevo curso.

    //Route::get('cursos/show/{show}',  'show')->name('cursos.show');

    //Route::get('cursos/{curso}/edit',  'edit')->name('cursos.edit');
    //Route::put('cursos/{curso}',  'update')->name('cursos.update');

    // eliminr un registro
    //Route::delete('cursos/{curso}',  'destroy')->name('cursos.destroy');
//});

Route::resource('cursos', CursosController::class)->names('cursos');

Route::get('curso/{curso}/{categoria?}', [CursosController::class, 'show_categoria']);

