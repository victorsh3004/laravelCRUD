<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use PHPUnit\Framework\Attributes\Group;

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

Route::get('/', HomeController::class)->name('home');

/*Route::controller(CursoController::class)->Group(function(){
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos', 'store')->name('cursos.store');
    Route::get('cursos/{id}', 'show')->name('cursos.show');
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}', 'update')->name('cursos.update');//metodo para actualizar
    Route::delete('cursos/{curso}','destroy')->name('cursos.destroy');//metodo para actualizar
});
*/


//Agrupar rutas con resource
Route::resource('cursos', CursoController::class);


//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');//parameters para indicar que asignaturas ira como variable curso
//names para no haya conflicto en las vistas cuando llamamos a las rutas con curso.-----
            
            //url    nombre de la vista
Route::view('nosotros', 'nosotros')->name('nosotros'); 
// Solo lo utilizamos para mostrar contenido estatico, por lo que no nos vamos a conectar con la BD, simplemente vamos a mostrar una vista
