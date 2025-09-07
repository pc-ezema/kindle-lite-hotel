<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/about-us', [HomePageController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact-us', [HomePageController::class, 'contactUs'])->name('contactUs');
Route::post('/contact-us/submit', [HomePageController::class, 'submitContact'])->name('submitContact');
Route::get('/faqs', [HomePageController::class, 'faqs'])->name('faqs');
Route::get('/gallery', [HomePageController::class, 'gallery'])->name('gallery');
Route::get('/booking-system', [HomePageController::class, 'bookingSystem'])->name('bookingSystem');
Route::post('/book-now', [HomePageController::class, 'bookNow'])->name('bookNow');
Route::get('/rooms/{type}', [HomePageController::class, 'roomByType'])->name('room.details');