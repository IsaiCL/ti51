<?php

namespace App\Http\Controllers;


use App\Http\Requests\AsignaturaRequest;
use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    //
    public function create()
    {
        //AQUÍ MOSTRAREMOS EL FORMULARIO    

        return view('asignaturaformulario');
    }
    public function store(AsignaturaRequest $request)
    {

        $asignatura = new \App\Models\Asignatura;

        $asignatura->nombre = $request->nombre;
        $asignatura->horas = $request->horas;
        $asignatura->descripcion = $request->descripcion;
        $asignatura->carrera = $request->carrera;
        //3. 
        $asignatura->save();

        return "Asignatura registrada correctamente";
    }
}
