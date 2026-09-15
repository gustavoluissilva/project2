<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Container\Attributes\DB as AttributesDB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Idea;

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
Route::get('/ideas',[IdeaController::class,'index']);
Route::get('/ideas/create',[IdeaController::class,'create']);
Route::get('/ideas/{idea}',[IdeaController::class,'show']);
Route::get('/ideas/{idea}/edit', [IdeaController::class,'edit']);
Route::patch('/ideas/{idea}/',[IdeaController::class,'update']);
Route::post('/ideas',[IdeaController::class,'store']);
Route::delete('/ideas/{idea}', [IdeaController::class,'destroy']);


 // $ideas = session()->get('ideas',[]);

    // passando pelo bd agora
    // $ideas = DB:: table('ideas')->get();
    //pegando apenas state prending
    // $ideas = Idea::where('state', 'pending')->get();

    // $ideas = Idea::query() -> when(request('state'),function($query,$state){
    //     // dd($state);

    //     $query->where('state',$state);

    // })->get();
    //rest



    // return view('ideas',[
    //     'greeting' => 'Hello,',
    //     'person' => request('person', 'Laracasts'),
    //     'ideas'=> $ideas

    // 'tasks' =>[
    //     'market',
    //     'walk the dog',
    //     'whatch the video tutorial'
    // ]

    // ]);
