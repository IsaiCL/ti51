<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
METODOS DE HTTP:
- GET
- POST
- PUT (agregar o remplazar completamente un recurso)
- PATCH (modificar parcialmente un recurso)
- DELETE (eliminar un recurso)
*/

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [WelcomeController::class, 'index']);

Route::get('formulario', [EstudianteController::class, 'create']);
Route::post('formulario', [EstudianteController::class, 'store']);


//Ruta para la pagina del CONTACTO.
Route::get('/contacto', function () {
    return "Bienvenidos a Contacto";
});

//Ruta para la página de QUIENES SOMOS.
Route::get('/producto/{n}', function ($n) {
    return view('plantilla')->with('iddelproducto', $n);
});

//Acceder a la pagina de contacto que usa una plantilla
Route::get('/contacto', function () {
    return "Bienvenidos a Contacto";
});

//Ruta para la página del FORMULAIO
Route::get('/formulario', function () {
    return view('formulario');
});
