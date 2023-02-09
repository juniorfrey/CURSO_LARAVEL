@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>nombre
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        <br>

        @error('name')
            <small>{{$message}}</small>
        @enderror
        <br><br>
        <label>Descripción
            <textarea row="5" name="description">{{old('description')}}</textarea>
        </label>
        <br>

        @error('description')
            <small>{{$message}}</small>
        @enderror
        <br><br>

        <label>Categoria
            <input type="text" name="category" {{old('category')}}>
        </label><br>
        @error('category')
            <small>{{$message}}</small>
        @enderror

        <br><br>
        <button type="submit">Enviar formulario</button>
    </form>

@endsection
