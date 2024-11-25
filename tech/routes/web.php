<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\PropertyController;


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
