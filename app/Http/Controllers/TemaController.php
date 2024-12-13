<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    //
    
    public function create($id)
    {
        $curso = Curso::find($id);

        return view('temas.create', compact('curso'));
    }
    public function show($id)
{
    $tema = Tema::find($id);
    return view('temas.show', compact('tema'));
}


    public function store(Request $request, $id)
    {
        $curso = Curso::find($id);

        $request->validate([
            'titulo' => 'required|string|max:200',
            'descripcion' => 'nullable|string',
            'orden' => 'required|integer',
        ]);

        $curso->temas()->create($request->only('titulo', 'descripcion', 'orden'));

        return redirect()->route('cursos.show', $id)->with('success', 'Tema creado correctamente.');
    }
}
