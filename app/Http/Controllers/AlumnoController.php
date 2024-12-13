<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //

    public function index()
    {
        $alumnos = Alumno::withCount('cursos')->get(); 
        return view('alumnos.index', compact('alumnos'));
    }

    public function show($id)
{
    $alumno = Alumno::find($id);
    $cursos = $alumno->cursos;
    return view('alumnos.show', compact('alumno', 'cursos'));
}

}
