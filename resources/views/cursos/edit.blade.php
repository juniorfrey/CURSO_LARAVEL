@extends('layouts.plantilla')

@section('title', 'Edit')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('PUT');
        <label>nombre
            <input type="text" name="name" value="{{$curso->name}}">
        </label><br><br>
        <label>Descripción
            <textarea row="5" name="description">{{$curso->description}}</textarea>
        </label><br><br>
        <label>Categoria
            <input type="text" name="category" value="{{$curso->category}}">
        </label><br><br>
        <button type="submit">Editar la información</button>
    </form>

@endsection