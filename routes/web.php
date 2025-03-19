<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

Route::view('/', 'pages.inicio');
Route::view('/historia', 'pages.historia');
Route::view('/tecnicas', 'pages.tecnicas');
Route::view('/recursos', 'pages.recursos');
Route::view('/contacto', 'pages.contacto');

});
