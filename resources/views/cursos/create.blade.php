@extends('layouts.app')

@section('contenido_principal')
<div class="container">
    <h1>Crear Curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <select name="categoria" id="categoria" >
                <option value="">Selecciona una categoría</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria }}">{{ $categoria }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Volver a Cursos</a>
    </form>
    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Curso Creado!',
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