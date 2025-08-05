<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingWishController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/wishes', [WeddingWishController::class, 'store'])->name('wishes.store');
Route::get('/wishes', [WeddingWishController::class, 'index'])->name('wishes.index');
