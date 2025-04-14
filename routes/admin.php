<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CarController;

Route::prefix('admin')->name('admin.')->group(function () {
    // Trang dashboard admin
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Quản lý xe
    Route::resource('cars', CarController::class);
});
