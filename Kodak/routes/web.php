<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SouvenirsController;

Route::get('/', function () {
    return view('main');
})->name('home');

Route::get('/test/main', function () {
    return view('main-test');
})->name('mainhome');

Route::get('/contact', function () {
    return view('contacts');
});

Route::get('/dashboard/addsouvenir', function () {
    return view('addsouvenir');
});

Route::get('/dashboard/allsouvenirs', function () {
    return view('allsouvenirs');
})->name('allsouvenirs');

Route::get('/map', function () {
    return view('map');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/souvenirs-all', function () {
    return view('souvenirs');
});

Route::get('/test', function () {
    return view('test');
});

Route::resource('souvenirs', SouvenirsController::class)->middleware(['auth']);

Route::get('/messages/{id}/delete', [ContactController::class, 'deleteMessage']) -> name('delete-message');
Route::get('/messages/{id}', [ContactController::class, 'showmessage'])->middleware(['auth']) -> name('messages-data-one');
Route::get('/messages', [ContactController::class, 'allData'])->middleware(['auth']) -> name('messages-data');
Route::get('/souvenirs-all', [SouvenirsController::class, 'allData']) -> name('souvenir-data');
Route::get('/dashboard', [ContactController::class, 'messagesAdmin']) ->middleware(['auth']) -> name('messages-data-dashboard');
Route::post('/contact/submit', [ContactController::class,'submit']) -> name('contact-form');

Route::get('/main-dashboard', function () {
    return view('main-dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
