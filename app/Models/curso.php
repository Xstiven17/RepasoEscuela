<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'nombre', 'tutor_id'];

    public function asignaturas(){
        return $this->hasMany(Asignatura::class);
    }

    public function profesor(){
 return $this->belongsTo(Profesor::class, 'tutor_id');
    }
}
