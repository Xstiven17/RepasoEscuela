<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignatura extends Model
{
    use HasFactory;

    public function alumno(){
        return $this->belongsToMany(alumno::class);
    }

    public function aula(){
        return $this->hasMany(aula::class);
    }
}
