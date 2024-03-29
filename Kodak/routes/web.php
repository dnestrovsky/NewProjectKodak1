<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SouvenirController;
use App\Http\Controllers\ImageController;

Route::middleware(['set_locale']) -> group(function () {

    Route::get('/', function () {
        return view('main');
    })->name('home');

    Route::get('/contact', function () {
        return view('contacts');
    })->name('contact');

    Route::get('/services', function () {
        return view('services');
    })->name('services');

    Route::get('/souvenirs-all', [SouvenirController::class, 'allData']) -> name('souvenir-data');
    Route::get('/souvenirpage/{id}', [SouvenirController::class, 'showMain']) -> name('souvenir-data1');
    Route::post('/contact/submit', [ContactController::class,'submit']) -> name('contact-form');


});
Route::get('locale/{locale}', [ContactController::class, 'changeLocale']) -> name('locale');

Route::get('/dashboard/addsouvenir', function () {
    return view('addsouvenir');
});

Route::get('/dashboard/allsouvenirs', function () {
    return view('allsouvenirs');
})->name('allsouvenirs');


Route::get('/addimage/{id}', [ImageController::class, 'create']) -> name('images.create');

Route::post('/addimage', [ImageController::class, 'store']) -> name('images.store');

Route::delete('/deleteimage/{image}', [ImageController::class, 'destroy']) -> name('images.destroy');


Route::resource('souvenirs', SouvenirController::class)->middleware(['auth']);

Route::get('/messages/{id}/delete', [ContactController::class, 'deleteMessage']) -> name('delete-message');
Route::get('/messages/{id}', [ContactController::class, 'showmessage'])->middleware(['auth']) -> name('messages-data-one');
Route::get('/messages', [ContactController::class, 'allData'])->middleware(['auth']) -> name('messages-data');
Route::get('/dashboard', [ContactController::class, 'messagesAdmin']) ->middleware(['auth']) -> name('messages-data-dashboard');
Route::get('/dashboard', [SouvenirController::class, 'indexAdmin']) ->middleware(['auth']) -> name('souvenir-data-dashboard');



Route::get('/main-dashboard', function () {
    return view('main-dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
