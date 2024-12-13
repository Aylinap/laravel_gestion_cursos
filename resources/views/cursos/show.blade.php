@extends('layouts.app')

@section('contenido_principal')
<div class="container mt-5">
    <h1 class="mb-4">Curso: {{ $curso->nombre }}</h1>

    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-3">Temas</h2>
            <a href="{{ route('temas.create', $curso->id) }}" class="btn btn-success mb-3">Agregar Tema</a>
            @if($curso->temas->isEmpty())
                <div class="alert alert-warning">No hay temas para este curso específico</div>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Título</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($curso->temas as $tema)
                            <tr>
                                <td>
                                    <a href="{{ route('temas.show', $tema->id) }}" class="text-decoration-none text-primary">
                                        {{ $tema->titulo }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="col-md-6">
            <h2 class="mb-3">Alumnos Matriculados</h2>
            @if($curso->alumnos->isEmpty())
                <div class="alert alert-warning">No hay alumnos matriculados</div>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($curso->alumnos as $alumno)
                            <tr>
                                <td>
                                    <a href="{{ route('alumnos.show', $alumno->id) }}" class="text-decoration-none text-primary">
                                        {{ $alumno->nombre }} {{ $alumno->apellidos }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection


