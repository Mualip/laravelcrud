<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // pastikan controller di-import juga

// Resource route
Route::resource('/product', ProductController::class);

// Route ke halaman welcome
Route::get('/', function () {
    return view('welcome');
});
