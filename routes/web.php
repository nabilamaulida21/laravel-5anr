<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/prodi', [ProdiController::class, 'index']);
Route::resource('prodi', ProdiController::class);

