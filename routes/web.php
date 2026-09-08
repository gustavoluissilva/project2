<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// }); jeito melhor em baixo para fazer as views

Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::view('/', 'welcome');
