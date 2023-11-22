<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<style>
    nav {
        width: 500px;
        margin: auto;
    }

    .link {
        display: flex;
        justify-content: space-around;
    }

    .link-nav {
        background-color: gainsboro;
        width: 25%;
        list-style: none;
        text-align: center;
    }

    .link-nav :hover {
        color: black;
    }

    .link-nav a {
        color: gray;
        text-decoration: none;
    }
</style>

<body>
    <header>
        <nav>
            <ul class="link">
                <li class="link-nav"><a href="{{ route('home') }}">Home</a></li>
                <li class="link-nav"><a href="{{ route('cursos.index') }}">Cursos</a></li>
                <li class="link-nav"><a href="{{ route('nosotros') }}">Nosotros</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')
</body>

</html>
