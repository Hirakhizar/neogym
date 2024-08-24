
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/why', function () {
    return view('why');
});
Route::get('/trainer', function () {
    return view('trainer');
});
Route::get('/contact', function () {
    return view('contact');
});