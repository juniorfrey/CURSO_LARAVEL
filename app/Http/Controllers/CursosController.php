<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCurso;

class CursosController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(CreateCurso $Request){

       /*  $Request->validate([
            'name'        => 'required|max:255',
            'description' => 'required|min:10',
            'category'    => 'required'
        ]); */

        /* $curso = new Curso();
        $curso->name = $Request->name;
        $curso->description = $Request->description;
        $curso->category = $Request->category;
        $curso->save(); */
        /* return $Request->all(); */
        $curso = Curso::create($Request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function show($id){

        $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        
        return view('cursos.edit', compact('curso'));
    
    }

    public function update(CreateCurso $Request, Curso $curso){

       /*  $Request->validate([
            'name'        => 'required',
            'description' => 'required',
            'category'    => 'required'
        ]);
 */
        /* $curso->name = $Request->name;
        $curso->description = $Request->description;
        $curso->category = $Request->category;
        $curso->save(); */
        $curso->update($Request->all());
        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }

    public function show_categoria($curso, $categoria=null){
        return $categoria ? "Este curso es: $curso de la categoria: $categoria" : "Bienvenido al curso: $curso";
    }
}
