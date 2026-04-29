<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/service', [App\Http\Controllers\PagesController::class, 'service'])->name('service');
Route::get('/services/air-ambulance', [App\Http\Controllers\PagesController::class, 'airAmbulance'])->name('services.air-ambulance');
Route::get('/services/private-jet-helicopter-charter', [App\Http\Controllers\PagesController::class, 'privateJetHelicopterCharter'])->name('services.private-jet-helicopter-charter');
Route::get('/services/air-cargo', [App\Http\Controllers\PagesController::class, 'airCargo'])->name('services.air-cargo');
Route::get('/services/aircraft-management', [App\Http\Controllers\PagesController::class, 'aircraftManagement'])->name('services.aircraft-management');
Route::get('/services/aircraft-sale-lease', [App\Http\Controllers\PagesController::class, 'aircraftSaleLease'])->name('services.aircraft-sale-lease');
Route::get('/services/travel-support', [App\Http\Controllers\PagesController::class, 'travelSupport'])->name('services.travel-support');
Route::get('/services/aviation-consultancy', [App\Http\Controllers\PagesController::class, 'aviationConsultancy'])->name('services.aviation-consultancy');
Route::post('/send-contact-form', [App\Http\Controllers\PagesController::class, 'sendContactForm'])->name('send-contact-form');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/business.php';
