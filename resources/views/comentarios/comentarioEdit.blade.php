<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('comentario.index') }}">Listado de Comentarios</a>
    <hr>
    <h1>Editar Comentario</h1>

    @include('parciales.form-error')

    <form action="{{ route('comentario.update', $comentario) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ old('nombre') ?? $comentario->nombre }}">
        <br>
        <label for="correo">Correo</label>
        <input type="text" name="correo" value="{{ old('correo') ?? $comentario->correo }}">
        <br>
        <label for="comentario">Comentario</label><br>
        <textarea name="comentario" cols="30" rows="5">{{ old('comentario') ?? $comentario->comentario }}</textarea>
        <br>
        <label for="ciudad">Ciudad</label><br>
        <select name="ciudad">
            <option value="GDL" @selected((old('ciudad') ?? $comentario->ciudad) == 'GDL')>Guadalajara</option>
            <option value="Zapopan" @selected((old('ciudad') ?? $comentario->ciudad) == 'Zapopan')>Zapopan</option>
            <option value="Tonalá" @selected((old('ciudad') ?? $comentario->ciudad) == 'Tonalá')>Tonalá</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>