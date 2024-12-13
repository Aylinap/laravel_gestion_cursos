<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion', 'documentos', 'orden', 'curso_id'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
    public function setTituloAttribute($value)
    {
        $this->attributes['titulo'] = ucfirst(strtolower($value));
    }
}
