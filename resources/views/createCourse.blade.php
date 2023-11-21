<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Crear un nuevo curso</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label for="">
            Nombre:
            <br><input type="text" name="name" value="{{ old('name') }}"> {{-- el metodo old recupera el valor que había anteriormente --}}
        </label>
        @error('name')
            {{-- si hay errores en el campo name muestra el mensaje --}}
            {{ $message }}
        @enderror
        <br>
        <label for="">
            Description: <br>
            <textarea name="description" id="" cols="25" rows="5">
                {{ old('description') }}
            </textarea>
        </label>
        @error('description')
            {{ $message }}
        @enderror
        <br>
        <label for="">
            Category: <br><input type="text" name="category">
        </label>
        @error('category')
            {{ $message }}
        @enderror
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
