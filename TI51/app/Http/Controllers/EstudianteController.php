<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    // Crear un método
    public function show($matricula) {
        return view('estudiante')->with('lamatricula' ,$matricula);
    }

    public function create() {
        return view('formulario');
    }

    public function store(Request $request) {
        return "nombre: ".$request->input('nombre')."<br>".
        "precio: ".$request->input('precio')."<br>".
        "guia: ".$request->input('guia')."<br>".
        "amenidades: ".$request->input('nombre')."<br>".
        "descripcion: ".$request->input('descripcion');
    }
}
