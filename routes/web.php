<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturaController;

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

/*
MÉTODOS DE HTTP:

- GET: Es para obtener un recurso, para solicitar un recurso.
- POST: Es para modificar o agregar un recurso. En el caso de Post lo utilizaremos para procesar un formulario, para agregar o editar.
- PUT: Es para agregar o reemplazar completamente un recurso.
- PATCH: Es para modificar parcialmente un recurso.
- DELETE: Para eliminar un recurso.


*/

use App\Http\Controllers\DocentesController;



Route::get('/', function () {
    return view('welcome');
});
//Ruta para la página de Contacto
Route::get('/contacto', function () {
    return view('contacto');
});
//Ruta para la página de QUIENES SOMOS
Route::get('/quienessomos', function () {
    return view('quienessomos');
});
//Ruta para la página de Formulario
Route::get('/tour', function () {
    return view('tour');
});


Route::get('/a', function () {
    return view('asignaturaformulario');
});


//////Aquí van los CONTROLADORES
Route::get('docentesformulario', [DocentesController::class, 'create']);
Route::post('docentesformulario', [DocentesController::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
