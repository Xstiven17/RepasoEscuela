<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    use HasFactory;

    protected $fillable = ['dni', 'apellidos'];

    public function curso(){
        return $this->hasMany(curso::class);
    }
}
