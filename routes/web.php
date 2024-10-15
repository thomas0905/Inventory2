<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/users', [DashboardController::class, 'index'])->name('users');

});

