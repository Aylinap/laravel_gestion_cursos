<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'categoria', 'precio'];

    public function temas()
    {
        return $this->hasMany(Tema::class);
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'alumno_curso');
    }
    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucfirst(strtolower($value));
    }
}
