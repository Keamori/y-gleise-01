<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\UserRegister;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserLogin::class,'index'])->name('user.login');

Route::get('/register', [UserRegister::class,'index'])->name('user.register');

Route::post('/user/create', [UserRegister::class,'store'])->name('user.create');

Route::post('/user/auth', [UserLogin::class,'login'])->name('user.auth');


New World