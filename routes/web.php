<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { 
    return View("paginas.index");
});

Route::get('/about', function() {
    return View("paginas.about");
});

Route::get('/menu', function() {
    return View("paginas.menu");
});

Route::get('/special', function() {
    return View("paginas.special");
});

Route::get('/events', function() {
    return View("paginas.events");
});

Route::get('/chefs', function() {
    return View("paginas.chefs");
});

Route::get('/gallery', function() {
    return View("paginas.gallery");
});

Route::get('/contact', function() {
    return View("paginas.contact");
});