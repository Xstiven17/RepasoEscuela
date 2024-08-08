<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aula extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'piso', 'pupitres'];

    public function asignatura(){
        return $this->hasMany(asignatura::class);
    }
}
