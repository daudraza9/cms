<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/post/{id}/{name}', function ($id,$name) {
//     return 'this is post number ' .$id . " and the name is ". $name;
// });

// // Route::get('/post/{id}',[PostController::class,'index']);

// Route::resource('post','PostController');
// Route::get('contact',[PostController::class,'contact']);

// Route::get('post/{id}',[PostController::class,'show_post']);

// Db raw query
// Route::get('/insert',function(){
//     DB::insert('insert into posts (title,content) values(?,?)',['PHP with laravel','Php laravel is the best thing that has happend']);
// });

// Route::get('/read',function(){
//    $result = DB::select('select * from posts where id = ?',[1]);
//     return $result;
//    foreach($result as $item)
//    {
//         return $item->title;
//    }

// });

// Route::get('/update',function(){

//     $updated = DB::update('update posts set title= "updated title" where id= ?',[1]);
//     return $updated;
// });

// Route::get('/delete',function(){
//     $deleted = DB::delete('delete from posts where id= ?',[1]);

//     return $deleted;
// });


// Route::get('/find',function(){
//     $posts = Post::all();
//     return $posts->title;
//     // foreach($posts as $post)
//     // {
//     //     return $post->title;
//     // }
// });

// Route::get('/find-where',function(){
//     $posts = Post::where('id',2)->orderBy('id','desc')->take(1)->get();

//     return $posts;

// });


/*
    ERM
*/

// Route::get('/find',function(){
//     $posts = Post::all();

//     foreach($posts as $post)
//     {
//         return $post->title;
//     }
// });


// Route::get('/find-where',function(){
//     $posts = Post::where('id',2)->orderBy('id','desc');
// });


/*
|--------------------------------------------------------------------------
| Relationship
|--------------------------------------------------------------------------
*/
//One to one relationship
// Route::get('/user/{id}/post',function($id){
//    return User::find($id)->post->title;

// });

// Route::get('/post/{id}/user',function($id){
//     return Post::find($id)->user->name;
// });

// Route::get('/posts',function(){
//     $user = User::find(1);

//     foreach($user->posts as $post){
//         echo $post->title . "<br>";
//     }
// });

//Many to Many relationship

Route::get('user/{id}/role',function($id){
    $user = User::find($id)->roles()->orderBy('id','desc')->get();
    return $user;
    // foreach($user->roles as $role){
    //     echo $role->name;
    // }
});
