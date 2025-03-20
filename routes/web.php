<?php

use Illuminate\Support\Facades\Route;

// Página de inicio
Route::view('/', 'pages.inicio');

// Otras páginas
Route::view('/historia', 'pages.historia');
Route::view('/tecnicas', 'pages.tecnicas');
Route::view('/recursos', 'pages.recursos');
Route::view('/contacto', 'pages.contacto');

// Test

