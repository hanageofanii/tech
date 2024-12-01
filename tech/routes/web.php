<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\DataController;


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

Route::post('/submit', [DataController::class, 'store'])->name('submit.form');


