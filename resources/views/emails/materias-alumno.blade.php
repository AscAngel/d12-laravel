<x-mail::message>
    
# Holaaa {{ $alumno->nombre }}

    <x-mail::panel>
        Estas son las materias a las que estás inscrito:
        
        @foreach ($materias as $materia)
            - {{ $materia->nombre }}
        @endforeach

    </x-mail::panel>

</x-mail::message>