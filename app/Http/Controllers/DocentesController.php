<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocentesRequest;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function create()
    {
        //AQUÍ MOSTRAREMOS EL FORMULARIO    

        return view('docentesformulario');
    }
    public function store(DocentesRequest $request)
    {
        //AQUÍ PROCESAREMOS EL FORMULARIO
        /*return
            view('quienessomos');*/

        /*"nombre: " . $request->input('nombre') . "<br>" .
            "apellidos: " . $request->input('apellidos') . "<br>" .
            "area: " . $request->input('area') . "<br>" .
            "numero_nomina: " . $request->input('numero_nomina');*/
        //Pasos
        //1. Crear un objeto
        $docente = new \App\Models\Docente;

        $docente->nombre = $request->nombre;
        $docente->apellidos = $request->apellidos;
        $docente->area = $request->area;
        $docente->numero_nomina = $request->numero_nomina;
        //3. 
        $docente->save();

        return "Docente registrado correctamente";
    }
}
