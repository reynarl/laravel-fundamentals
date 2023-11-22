@extends('Layouts.plantilla')
@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido al curso {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index') }}">REGRESAR</a>
    <p>Description: {{ $curso->description }}</p>
    <p>Category: {{ $curso->category }}</p>
    <a href="{{ route('cursos.edit', ['curso' => $curso]) }}">EDITAR</a>
    {{-- pasamos el nombre de la ruta a la cual se dirigirá y los parametros que recibe --}}
    <form action="{{ route('cursos.destroy', ['curso' => $curso]) }}" method="POST">
        @csrf
        @method('delete')
        <button>ELIMINAR</button>
    </form>
@endsection
