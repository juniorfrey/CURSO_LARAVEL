<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show', compact('curso'));
    }

    public function show_categoria($curso, $categoria=null){
        return $categoria ? "Este curso es: $curso de la categoria: $categoria" : "Bienvenido al curso: $curso";
    }
}
