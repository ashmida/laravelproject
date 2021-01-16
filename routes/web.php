<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified','authadmin'])->get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::resource('searchbook', \App\Http\Controllers\SearchbookController::class);
Route::resource('addrating', \App\Http\Controllers\AddRatingController::class);
Route::resource('addbooks', \App\Http\Controllers\AddBookController::class);