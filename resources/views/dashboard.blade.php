@extends('layouts.app')
@section('contenido_principal')
<div class="container mt-5">
    <h1 class="text-center mb-4">Bienvenido a Gestión de Cursos de <br>ProgramaKat</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total de Cursos</h5>
                    <p class="card-text display-4">{{ $totalCursos }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Dinero Ganado</h5>
                    <p class="card-text display-4">${{ number_format($totalDinero, 2) }}€</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total de Alumnos Matriculados</h5>
                    <p class="card-text display-4">{{ $totalMatriculados }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

