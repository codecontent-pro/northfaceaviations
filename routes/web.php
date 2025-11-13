<?php

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/service', [App\Http\Controllers\PagesController::class, 'service'])->name('service');
Route::post('/send-contact-form', [App\Http\Controllers\PagesController::class, 'sendContactForm'])->name('send-contact-form');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/business.php';
