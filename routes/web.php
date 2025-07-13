<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

// 同じ意味☝☟

Route::view('/', 'index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'sendMail']);
Route::get('/contact/complete', [ContactController::class, 'complete'])->name('contact.complete');
