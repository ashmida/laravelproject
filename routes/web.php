<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;



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
Route::resource('feedback', \App\Http\Controllers\FeedbackController::class);
