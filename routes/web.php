<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Include admin routes
require __DIR__.'/admin.php';

Route::prefix('admin')->group(function () {
    // Admin routes will go here
    Route::get('/', function () {
        return 'Admin Dashboard';
    });
});
