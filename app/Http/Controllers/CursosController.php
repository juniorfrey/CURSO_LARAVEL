<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(){

        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function createPost(){
        return "Crear por medio de POST";
    }

    public function show($id){

        $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }

    public function show_categoria($curso, $categoria=null){
        return $categoria ? "Este curso es: $curso de la categoria: $categoria" : "Bienvenido al curso: $curso";
    }
}
