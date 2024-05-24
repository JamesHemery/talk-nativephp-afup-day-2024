<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tasks');
})->name('tasks');

Route::get('/quick-task', function () {
    return view('quick-task');
})->name('quick-task');

Route::get('/menu-bar', function () {
    return view('menu-bar');
})->name('menu-bar');
