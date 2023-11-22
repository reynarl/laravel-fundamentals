<?php

use App\Http\Controllers\cursoController;
use App\Models\Curso;
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
})->name('home');

// Route::get('cursos', [cursoController::class, 'index'])->name('cursos.index');
// Route::get('cursos/crear', [cursoController::class, 'create'])->name('cursos.create');
// Route::post('cursos', [cursoController::class, 'store'])->name('cursos.store');
// Route::get('cursos/{curso}', [cursoController::class, 'show'])->name('cursos.show'); //muestra los cursos
// Route::get('cursos/{curso}/editar', [cursoController::class, 'edit'])->name('cursos.edit');
// Route::put('cursos/{curso}', [cursoController::class, 'update'])->name('cursos.update');
// Route::delete('cursos/{curso}', [cursoController::class, 'destroy'])->name('cursos.destroy');

//Todas las rutas anteriores se pueden crear de esta forma simplificada:

Route::resource('cursos', cursoController::class);

//php artisan r:l ->ver rutas

// EN CASO DE SER NECESARIO: Si queremos cambiar el nombre de las rutas podemos simplemente cambiar el nombre dentro de los parentesis, también podemos añadir la funcion parameters() para indicar que los parametros que reciben las rutas en lugar de asignaturas se queden como curso para no generar problemas y añadir names() para cambiar los nombres de las funciones generadas en el controllador

// Route::resource('asignaturas', cursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

Route::view('nosotros', 'nosotros')->name('nosotros');
