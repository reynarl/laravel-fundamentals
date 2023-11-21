<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Cursos</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li><a href="{{ route('cursos.show', $curso->id) }}">{{ $curso->name }}</a></li>
        @endforeach
        <a href="{{ route('cursos.create') }}">CREAR CURSO</a>
    </ul>
</body>

</html>
