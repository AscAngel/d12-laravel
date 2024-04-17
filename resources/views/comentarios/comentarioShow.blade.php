<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle del Comentario</title>
</head>
<body>
    <h1>Detalle del Comentario</h1>

    <ul>
        <li>Nombre: {{ $comentario->nombre }}</li>
        <li>Correo: {{ $comentario->correo }}</li>
        <li>Comentario: {{ $comentario->comentario }}</li>
        <li>Ciudad: {{ $comentario->ciudad }}</li>
    </ul>

    <h2>Archivos</h2>

    <ul>
        @foreach ($comentario->archivos as $archivo)
            <li>
                <a href="{{ route('archivo.download', $archivo }}">
                    Descargar imagen
                </a>
                <br>
                <p>Imagen: {{ $archivo->nombre_original }}</p>
                <img src="{{ \Storage::url($archivo->ubicacion) }}" alt="Imagen" width="300px">
            </li>
        @endforeach
    </ul>

</body>
</html>