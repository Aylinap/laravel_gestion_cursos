@extends('layouts.app')

@section('contenido_principal')
    <div class="container">
        <h1>Alumno: {{ $alumno->nombre }} {{ $alumno->apellidos }}</h1>
        <div>
            <p><strong>Email: </strong>  {{ $alumno->email }}</p>
            <p><strong>Fecha de matrícula:</strong> {{ $alumno->created_at }}</p>
        </div>
        <div>
            <h2>Cursos Matriculados</h2>
            <ul>
                @forelse ($cursos as $curso)
                    <li><strong>Curso: </strong>{{ $curso->nombre }} <strong> Categoría: </strong> {{ $curso->categoria }}</li>
                @empty
                    <li>Este alumno no está matriculado en ningún curso.</li>
                @endforelse
            </ul>
            <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Volver a Alumnos</a>
            <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Volver a Cursos</a>
        </div>
    </div>
@endsection
