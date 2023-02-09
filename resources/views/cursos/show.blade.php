@extends('layouts.plantilla')

@section('title', 'Show '.$curso)

@section('content')
    <h1>Bienvenido al curso: <b>{{$curso->name}}</b></h1>
    <br>
    <a href="{{route('cursos.index')}}">Ir a la lista</a>
    <hr>
    <p><strong>Categoria:</strong> {{$curso->category}}</p>
    <p>{{$curso->description}}</p>
@endsection