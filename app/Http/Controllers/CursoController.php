<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function dashboard()
    {
        $totalCursos = Curso::count();
        $totalDinero = Curso::sum('precio');
        $totalMatriculados = Alumno::distinct('id')->count('id');

        return view('dashboard', compact('totalCursos', 'totalDinero', 'totalMatriculados'));
    }

    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }


    public function matriculacion()
    {
        $cursos = Curso::all();
        $alumnos = Alumno::all();

        return view('cursos.matriculacion', compact('cursos', 'alumnos'));
    }

    public function inscribir(Request $request)
    {
        $request->validate([
            'curso_id' => 'required',
            'alumno_id' => 'required',
        ]);

        $curso = Curso::find($request->curso_id);
        $curso->alumnos()->attach($request->alumno_id);

        return redirect()->route('cursos.matriculacion')->with('success', 'Alumno matriculado correctamente.');
    }
    public function edit($id)

    {
        $curso = Curso::find($id);
        $categorias = ['Desarrollo web', 'Diseño web', 'Programación', 'Bases de datos'];

        return view('cursos.edit', compact('curso', 'categorias'));
    }

    public function show($id)
    {
        $curso = Curso::with('temas', 'alumnos')->find($id);

        return view('cursos.show', compact('curso'));
    }


    public function create()
    {
        $categorias = ['Desarrollo web', 'Diseño web', 'Programación', 'Bases de datos'];
        return view('cursos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:200',
            'descripcion' => 'required|string',
            'categoria' => 'required|in:Desarrollo web,Diseño web,Programación,Bases de datos',
            'precio' => 'required|numeric',
        ]);

        Curso::create($validated);

        return redirect()->route('cursos.index')->with('success', 'Curso creado exitosamente.');
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::find($id);

        if ($curso) {
            $validated = $request->validate([
                'nombre' => 'required|string|max:200',
                'descripcion' => 'required|string',
            ]);

            $curso->update($validated);

            return redirect()->route('cursos.index')->with('success', 'Curso actualizado exitosamente.');
        } else {
            return redirect()->route('cursos.index')->with('error', 'Curso no encontrado.');
        }
    }


    public function destroy($id)
    {
        $curso = Curso::find($id);
        if ($curso) {
            $curso->delete();
            return redirect()->route('cursos.index')->with('success', 'Curso eliminado exitosamente.');
        }
    }
}
