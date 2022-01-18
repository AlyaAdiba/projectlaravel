<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PostController;

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
Route::get('/home',[PublicController::class,'index']);
Route::get('/contact',[PublicController::class,'contact']);
Route::get('/about',[PublicController::class,'about']);
Route::get('/minidoll' , [PostController::class,'minidoll']);
Route::get('/Login',[PublicController::class,'login']);
Route::get('/About' , [PublicController::class, 'about']);
Route::get('/Register' , [PublicController::class,'register']);
Route::get('/nendoroid' , [PostController::class,'nendoroid']);
Route::get('/shikishi' , [PostController::class,'shikishi']);
