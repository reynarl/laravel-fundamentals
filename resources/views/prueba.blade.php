@extends('Layouts.plantilla')
@section('title', 'Cursos')

@section('content')
    <h1>Cursos</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li><a href="{{ route('cursos.show', $curso->id) }}">{{ $curso->name }}</a></li>
        @endforeach
        <a href="{{ route('cursos.create') }}">CREAR CURSO</a>
    </ul>
@endsection
