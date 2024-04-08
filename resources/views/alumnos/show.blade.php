<x-mi-layout titulo="Agendar materia">
    <h1>Detalle del alumno: {{ $alumno->nombre }}</h1>

    <ul>
        @foreach ($alumno->materias as $materia)
            <li>{{ $materia->nombre }}</li>
        @endforeach
    </ul>

</x-mi-layout>