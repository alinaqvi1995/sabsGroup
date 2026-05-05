<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('coming-soon');
});

// Redirect any other route to coming soon
Route::fallback(function () {
    return redirect('/');
});
