<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'nombre'];

    public function profesor(){
        return $this->belongsTo(profesor::class);
    }
}
