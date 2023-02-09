@extends('layouts.plantilla')

@section('title', 'Edit')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('PUT');
        <label>nombre
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label><br>
        @error('name')
            <small>{{$message}}</small>
        @enderror
        <br><br>
        <label>Descripción
            <textarea row="5" name="description">{{old('description', $curso->description)}}</textarea>
        </label> <br>
        @error('description')
            <small>{{$message}}</small>
        @enderror
        <br><br>

        <label>Categoria
            <input type="text" name="category" value="{{old('category', $curso->category)}}">
        </label><br>
            @error('category')
                <small>{{$message}}</small>
            @enderror
        <br><br>
        <button type="submit">Editar la información</button>
    </form>

@endsection