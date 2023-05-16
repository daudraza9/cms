<?php

use App\Http\Controllers\PostController;
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
Route::get('contact',[PostController::class,'contact']);

Route::get('post/{id}',[PostController::class,'show_post']);
