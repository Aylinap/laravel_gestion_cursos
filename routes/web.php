<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\TemaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CursoController::class, 'dashboard'])->name('dashboard');
Route::resource('cursos', CursoController::class);
Route::get('matriculacion', [CursoController::class, 'matriculacion'])->name('cursos.matriculacion');
Route::post('matriculacion', [CursoController::class, 'inscribir'])->name('cursos.inscribir');

Route::put('/cursos/{id}', [CursoController::class, 'update'])->name('cursos.update');

Route::get('cursos/{id}/temas/create', [TemaController::class, 'create'])->name('temas.create');
Route::post('cursos/{id}/temas', [TemaController::class, 'store'])->name('temas.store');
Route::get('temas/{id}', [TemaController::class, 'show'])->name('temas.show');

Route::get('alumnos/{id}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::get('alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');


