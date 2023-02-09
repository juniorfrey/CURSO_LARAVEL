@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
        <h1>Bienvenido a la platforma de cursos</h1>
        <hr>
        <a href="{{route('cursos.create')}}">Crear curso</a>
        <hr>
        <ul>
            @foreach ($cursos as $curso)
                <li><a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}} || {{$curso->category}}</a></li>
            @endforeach
        </ul>
        <hr>
        {{$cursos->links()}}
@endsection
