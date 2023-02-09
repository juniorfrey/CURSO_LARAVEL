<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function createPost(Request $Request){
        $curso = new Curso();
        $curso->name = $Request->name;
        $curso->description = $Request->description;
        $curso->category = $Request->category;
        $curso->save();
        return redirect()->route('cursos.show', $curso->id);
    }

    public function show($id){

        $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        
        return view('cursos.edit', compact('curso'));
    
    }

    public function update(Request $Request, Curso $curso){
        $curso->name = $Request->name;
        $curso->description = $Request->description;
        $curso->category = $Request->category;
        $curso->save();
        return redirect()->route('cursos.show', $curso->id);
    }

    public function show_categoria($curso, $categoria=null){
        return $categoria ? "Este curso es: $curso de la categoria: $categoria" : "Bienvenido al curso: $curso";
    }
}
