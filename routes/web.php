<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\postcontroller;

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

Route::get('/',[postcontroller::class,'loadposts']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/makepost',[postcontroller::class,'makepost']);

Route::post('/makepost',[postcontroller::class,'posting']);

Route::get('/posts/{id}',[postcontroller::class,'view_post']);

Route::get('/delete/{id}',[postcontroller::class,'delete_post']);

Route::post('/login',[userController::class,'login']);

Route::get('/logout',[userController::class,'logout']);

Route::view('/register','register');

Route::post('/register',[userController::class,'register']);

Route::get('/search',[postcontroller::class,'search']);
