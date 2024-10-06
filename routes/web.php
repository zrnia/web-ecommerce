<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', App\Livewire\Auth\Register::class)->name('register');

Route::get('/', App\Livewire\Auth\Login::class)->name('login');
