@extends('layouts.app')

@section('contenido_principal')
<div class="container">
    <h1 class="my-4">Gestión de Alumnos</h1>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Cursos Inscritos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre }} {{ $alumno->apellidos }}</td>
                <td>{{ $alumno->email }}</td>
                <td>{{ $alumno->cursos_count }}</td> 
                <td>
                    <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-primary btn-sm">Ver más</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
