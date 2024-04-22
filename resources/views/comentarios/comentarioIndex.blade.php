<x-mi-layout titulo="Listado de Comentarios">
    <a class="btn btn-primary" href="{{ route('comentario.create') }}">Nuevo Comentario</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Ciudad</th>
                <th>Creado / Enviado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comentarios as $comentario)
                <tr>
                    <td>{{ $comentario->user->name }}</td>
                    <td>{{ $comentario->user->email }}</td>
                    <td>{{ $comentario->ciudad }}</td>
                    <td>{{ $comentario->created_at }}</td>
                    <td>
                        <a href="{{ route('comentario.show', $comentario) }}">Detalle</a> |
                        @can('update', $comentario)
                            <a href="{{ route('comentario.edit', $comentario) }}">Editar</a> |
                        @endcan
                        @can('delete', $comentario)
                            <form action="{{ route('comentario.destroy', $comentario) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Eliminar">
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-mi-layout>
