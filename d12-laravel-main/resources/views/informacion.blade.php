<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info</title>
</head>
<body>
    <a href="/contacto">Contacto</a>
    <hr>
    <h1>Información</h1>

    @if ($tipo == 'alumno')
        <h2>Alumnos</h2>
        <p>blab bla bal</p>
    @elseif($tipo == 'prof' || $tipo == 'profesor')
        <h2>Profesores</h2>
        <p>fjdksalñfjañ fjdksalñfj</p>
    @else
        <h2>Publico General</h2>
    @endif

</body>
</html>
