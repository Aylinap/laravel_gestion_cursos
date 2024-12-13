<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //

    use HasFactory;

    protected $fillable = ['nombre', 'apellidos', 'email'];

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'alumno_curso');
    }
}
