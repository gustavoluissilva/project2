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
    $ideas = session()->get('ideas',[]);

    return view('ideas',[
        'greeting' => 'Hello,',
        'person' => request('person', 'Laracasts'),
        'ideas'=> $ideas

        // 'tasks' =>[
        //     'market',
        //     'walk the dog',
        //     'whatch the video tutorial'
        // ]

    ]);

});

route::post('/ideas', function(){
    $idea = request('idea');
    session()->push('ideas', $idea);

    return redirect('/');
});


//temporary
route::get('/delete-ideas', function(){
session()->forget('ideas');

return redirect('/');
});
