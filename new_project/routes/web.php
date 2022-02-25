<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all/{id}',
    [\App\Http\Controllers\ContactController::class,'showOneMessage'])
    ->name('contact-data-one');

Route::get('/contact/all/{id}/update',
    [\App\Http\Controllers\ContactController::class,'updateMessage'])
    ->name('contact-update');

Route::post('/contact/all/{id}/update',
    [\App\Http\Controllers\ContactController::class,'updateMessageSubmit'])
    ->name('contact-update-submit');

Route::get('/contact/all/{id}/delete',
    [\App\Http\Controllers\ContactController::class,'deleteMessageSubmit'])
    ->name('contact-delete');


Route::get('/contact/all', [\App\Http\Controllers\ContactController::class,'allData'])->name('contact-data');

Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class,'submit'])->name('contact-form');
