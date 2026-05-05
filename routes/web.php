<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

// Route::get('/', function () {
//     return view('coming-soon');
// });

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about');

Route::get('/workforce-solutions', function () {
    return view('workforce-solutions');
})->name('workforce');

Route::get('/technology-infrastructure', function () {
    return view('tech-infrastructure');
})->name('technology');

Route::get('/supply-procurement-solutions', function () {
    return view('supply-procurement');
})->name('supply');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Fallback for undefined routes
Route::fallback(function () {
    return redirect('/');
});
