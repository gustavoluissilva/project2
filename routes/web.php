<?php

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

Route::get('/ideas', function () {

$ideas = Idea::all();
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
    return view('ideas.index', [
        'ideas' => $ideas,
    ]);
});

Route::get('/ideas/{idea}',function(Idea $idea){

return view('ideas.show',[
    'idea'=>$idea,
]);


});

//edit
Route::get('/ideas/{idea}/edit', function(Idea $idea){


    return view('ideas.edit',[
        'idea'=>$idea,

    ]);
});

//update
Route::patch('/ideas/{idea}/', function(Idea $idea){
$idea->update([
'description' => request('description'),
]);
return redirect("ideas/{$idea->id}");
});

//store
Route::post('/ideas', function () {
    // session()->push('ideas', $idea);

    Idea::create([
        'description' => request('description'),
        'state' => 'pending',
    ]);

    return redirect('/ideas');
});

//destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {

   $idea -> delete();

    return redirect('/ideas');
});



