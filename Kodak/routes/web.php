<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('main');
})->name('home');

Route::get('/contact', function () {
    return view('contacts');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/souvenirs', function () {
    return view('souvenirs');
});

Route::get('/messages/{id}/delete', [ContactController::class, 'deleteMessage']) -> name('delete-message');
Route::get('/messages/{id}', [ContactController::class, 'showmessage']) -> name('messages-data-one');
Route::get('/messages', [ContactController::class, 'allData']) -> name('messages-data');
Route::get('/dashboard', [ContactController::class, 'messagesAdmin']) -> name('messages-data-dashboard');
Route::post('/contact/submit', [ContactController::class,'submit']) -> name('contact-form');

Route::get('/main-dashboard', function () {
    return view('main-dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
