<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SouvenirsController;

Route::middleware(['set_locale']) -> group(function () {
    Route::get('/', function () {
        return view('main');
    })->name('home');

    Route::get('/contact', function () {
        return view('contacts');
    })->name('contact');

    Route::get('/services', function () {
        return view('services');
    });

    Route::get('/souvenirs-all', [SouvenirsController::class, 'allData']) -> name('souvenir-data');
    Route::get('/souvenirpage/{id}', [SouvenirsController::class, 'showprod']) -> name('souvenir-data1');



});


Route::get('locale/{locale}', [ContactController::class, 'changeLocale']) -> name('locale');

Route::get('/dashboard/addsouvenir', function () {
    return view('addsouvenir');
});

Route::get('/dashboard/allsouvenirs', function () {
    return view('allsouvenirs');
})->name('allsouvenirs');




Route::resource('souvenirs', SouvenirsController::class)->middleware(['auth']);

Route::get('/messages/{id}/delete', [ContactController::class, 'deleteMessage']) -> name('delete-message');
Route::get('/messages/{id}', [ContactController::class, 'showmessage'])->middleware(['auth']) -> name('messages-data-one');
Route::get('/messages', [ContactController::class, 'allData'])->middleware(['auth']) -> name('messages-data');
Route::get('/dashboard', [ContactController::class, 'messagesAdmin']) ->middleware(['auth']) -> name('messages-data-dashboard');
Route::post('/contact/submit', [ContactController::class,'submit']) -> name('contact-form');

Route::get('/main-dashboard', function () {
    return view('main-dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
