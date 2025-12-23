<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $info = "some info";
    return view('home', compact("info"));
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');


Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');