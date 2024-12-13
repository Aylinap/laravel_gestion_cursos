@extends('layouts.app')

@section('contenido_principal')
    <div class="container">
        <h1>Matriculación</h1>

        <form action="{{ route('cursos.inscribir') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="curso_id" class="form-label">Curso</label>
                <select name="curso_id" id="curso_id" class="form-select">
                    <option value="" disabled selected>Selecciona un curso</option>
                    @foreach ($cursos as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="alumno_id" class="form-label">Alumno</label>
                <select name="alumno_id" id="alumno_id" class="form-select">
                    <option value="" disabled selected>Selecciona un alumno</option>
                    @foreach ($alumnos as $alumno)
                        <option value="{{ $alumno->id }}">{{ $alumno->nombre }} {{ $alumno->apellidos }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Matricular</button>
        </form>

        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: '¡Matriculación exitosa!',
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
