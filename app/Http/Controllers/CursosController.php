<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(){
        return "Bienvenido a la platforma de cursos";
    }

    public function create(){
        return "En esta pagina podras crear un curso";
    }

    public function show($curso){
        return "Bienvenido al curso: $curso";
    }

    public function show_categoria($curso, $categoria=null){
        return $categoria ? "Este curso es: $curso de la categoria: $categoria" : "Bienvenido al curso: $curso";
    }
}
