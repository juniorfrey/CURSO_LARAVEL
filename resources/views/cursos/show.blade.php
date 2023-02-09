@extends('layouts.plantilla')

@section('title', 'Curso de : '.$curso->name)

@section('content')
    <h1>Bienvenido al curso: <b>{{$curso->name}}</b></h1>
    <br>
    <a href="{{route('cursos.index')}}">Ir a la lista</a>
    <br>
    <hr>
    <a href="{{route('cursos.edit', $curso->id, $curso->name)}}">Editar Curso</a><br>
    <p><strong>Categoria:</strong> {{$curso->category}}</p>
    <p>{{$curso->description}}</p>
@endsection