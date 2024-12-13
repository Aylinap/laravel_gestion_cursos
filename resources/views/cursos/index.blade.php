@extends('layouts.app')

@section('contenido_principal')
    <div class="container">
        <h1>Lista de Cursos</h1>
        <a href="{{ route('cursos.create') }}" class="btn btn-primary">Crear Curso</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nº Temas</th>
                    <th>Nº Alumnos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <td>{{ $curso->nombre }}</td>
                        <td>{{ $curso->temas->count() }}</td>
                        <td>{{ $curso->alumnos->count() }}</td>
                        <td>
                            <a href="{{ route('cursos.show', $curso->id) }}" class="btn btn-success">Ver</a>
                            <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: '¡Curso actualizado!',
                    text: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 2000
                });
            </script>
        @endif

        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: '¡Algo salió mal!',
                    text: '{{ session('error') }}',
                    showConfirmButton: false,
                    timer: 2000
                });
            </script>
        @endif

    </div>
@endsection
