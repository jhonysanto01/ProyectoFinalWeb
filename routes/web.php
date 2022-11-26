<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SoloUserController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {

    return view('Inicio');
});

Auth::routes();

Route::resource('/admin', HomeController::class);
Route::resource('/user', SoloUserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

