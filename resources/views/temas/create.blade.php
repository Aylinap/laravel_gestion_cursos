@extends('layouts.app')
@section('contenido_principal')
<div class="container">
    <h1>Crear Tema para el Curso: {{ $curso->nombre }}</h1>

    <form action="{{ route('temas.store', $curso->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="orden" class="form-label">Orden</label>
            <input type="number" name="orden" id="orden" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Crear Tema</button>
    </form>
    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Tema Creado!',
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