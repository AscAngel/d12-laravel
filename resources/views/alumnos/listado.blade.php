<x-mi-layout titulo="Listado alumnos">
    <table class="table">
        <tr>
            <th>Acciones</th>
        </tr>
        @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->correo }}</td>
                <td></td>
            </tr>
        @endforeach
    </table>
</x-mi-layout>