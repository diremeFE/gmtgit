<?php

use Illuminate\Support\Facades\Route;



// Página de inicio
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Página de servicios
Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');


// Página sobre nosotros
Route::get('/sobre-nosotros', function () {
    return view('sobre-nosotros');
})->name('sobre-nosotros');

// Página de contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');


Route::get('/presupuesto', function () {
    return view('presupuesto');
})->name('presupuesto');

