<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        //Tabla Asignatura
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('hora');
            $table->string('nombre');
            $table->string('dia');
            $table->string('mes');
            $table->timestamps();
        });

        //Tabla aulas
        Schema::create('aulas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('piso');
            $table->string('pupitres');
            $table->timestamps();
        });

        //Tabla alumnos
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('apellidos');
            $table->timestamps();
        });

        //Tabla profesores
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('apellidos');
            $table->timestamps();
        });

        //Tabla cursos
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->timestamps();
        });

        //Tabla Alumno_Asignatura
        Schema::create('alumno_asignatura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('asignatura_id');
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
            $table->foreign('asignatura_id')->references('id')->on('asignaturas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('alumno_asignatura');
        Schema::dropIfExists('cursos');
        Schema::dropIfExists('profesores');
        Schema::dropIfExists('alumnos');
        Schema::dropIfExists('aulas');
        Schema::dropIfExists('asignaturas');
    }
};
