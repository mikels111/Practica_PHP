<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>

<body>
    @section('header'){{-- En @section se pone el nombre que quieras--}}
        CABECERA
    @show {{-- @show es para cerrar @section--}}

    <div class="container">
        @yield('content') {{-- Aquí se va mostrar lo que esté en la "section" con el mismo nombre en "pagina.blade.php"--}}
    </div>

    @section('footer')
        PIE DE PÁGINA
    @show
</body>

</html>