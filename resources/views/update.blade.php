<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>UPDATE COURSE</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('put')
        <label for="">
            Nombre:
            <br><input type="text" name="name" value="{{ $curso->name }}">
        </label>
        <br>
        <label for="">
            Description: <br>
            <textarea name="description" id="" cols="25" rows="5">{{ $curso->description }}</textarea>
        </label>
        <br>
        <label for="">
            Category: <br><input type="text" name="category" value="{{ $curso->category }}">
        </label>
        <button type="submit">Actualizar</button>
    </form>
</body>

</html>
