<x-mi-layout titulo="Agendar materia">
    <h1>Agendar materia para {{ $alumno->nombre }}</h1>
    <form action="{{ route('alumno.relacionar-materia-alumno', $alumno) }}" method="POST"> 
        @csrf
        <div class="form-group">
            <label for="materia">Materia</label>
            <select name="materia_id[]" id="materia" class="form-control" multiple>
                @foreach ($materias as $materia)

                    <option value="{{ $materia->id }}" @selected(false !== array_search(@materia->id, $alumno->materias->pluck('id')->toArray())) >{{ $materia->nombre }}</option>
                @endforeach
            </select>
        </div>



        <input type="submit" value="Agendar" class="btn btn-primary">
    </form>
</x-mi-layout>