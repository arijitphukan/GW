<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/loginpage', function () {
    return view('pages.Login');
})->name('login');
Route::get('/registrationpage', function () {
    return view('pages.Registration');
})->name('register');
