<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');
Route::get('/loginpage', function () {
    return view('pages.Login');
})->name('login');
Route::get('/registrationpage', function () {
    return view('pages.Registration');
})->name('register');

//Controllers
Route::post('/userregistration',[UserController::class,'userregistration'])->name('userregister');
Route::post('/userlogin',[UserController::class,'userlogin'])->name('loginuser');
