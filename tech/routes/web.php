<?php

use App\Http\Controllers\JenisPropertiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaranController;


Route::get('/', function () {
    return view('index');
});

// // routes/web.php
// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/regis', function () {
//     return view('regis');
// });

Route::post('/saran', [SaranController::class, 'store'])->name('saran.store');
Route::get('/jenis_properti', [JenisPropertiController::class, 'index']);
