<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about-us', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('our-service', function () {
    return view('services');
})->name('services');

Route::get('faq', function () {
    return view('faq');
})->name('faq');
Route::get('pricing', function () {
    return view('percing');
})->name('percing');
Route::get('how_it_works', function () {
    return view('how_it_works');
})->name('how_it_works');