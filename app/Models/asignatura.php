<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignatura extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'hora', 'nombre', 'dia', 'mes', 'curso_id', 'aula_id', 'profesor_id'];

    public function alumno(){
        return $this->belongsToMany(alumno::class);
    }

    public function aula(){
        return $this->belongsTo(aula::class);
    }

    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    public function profesor(){
        return $this->belongsTo(Profesor::class);
    }
}

