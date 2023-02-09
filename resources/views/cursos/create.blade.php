@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>

    <form action="{{route('cussos.createPost')}}">
        <label>nombre
            <input type="text" name="name">
        </label><br><br>
        <label>Descripción
            <textarea row="5" name="description"></textarea>
        </label><br><br>
        <label>Categoria
            <input type="text" name="category">
        </label><br><br>
    </form>

@endsection
