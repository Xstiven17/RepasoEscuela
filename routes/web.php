<?php

use App\Http\Controllers\AulaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('escuela22', AulaController::class);