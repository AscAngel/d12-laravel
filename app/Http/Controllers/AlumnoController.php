<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.listado', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
    }

    public function agendarMateria(Alumno $alumno)
    {

        
        return view('alumnos.agregar-materia', compact('alumno'))
            ->with('materias', Materia::all);
    }

    public function relacionarMateriaConAlumno(Request $request, Alumno $alumno)
    {
        //Recuperar el alumno
        $materia_id = $request->materia_id;
        $alumno_id = $alumno->id;

        // $alumno->materias()->attach($materia_id);
        $alumno->materias()->sync($materia_id);

        return redirect()->route('alumnos.show', $alumno_id);
    }
}
