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

route::get('/', function(){
    return view('welcome',[
        'greeting' => 'Hello,',
        'person' => request('person', 'Laracasts'),

        // 'tasks' =>[
        //     'market',
        //     'walk the dog',
        //     'whatch the video tutorial'
        // ]

    ]);

});
