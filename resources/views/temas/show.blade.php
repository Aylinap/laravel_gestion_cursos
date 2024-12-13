@extends('layouts.app')

@section('contenido_principal')
<div class="container">
    <h1>Tema: {{ $tema->titulo }}</h1>
    <p><strong>Descripción: </strong>{{ $tema->descripcion }}</p>
    <p><strong>Orden: </strong>{{ $tema->orden }}</p>


    <a href="{{ route('cursos.show', $tema->curso_id) }}" class="btn btn-secondary">Volver al Curso</a>
</div>
@endsection

