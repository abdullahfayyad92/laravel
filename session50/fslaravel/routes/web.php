<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\testController;
use App\Models\categoryModel;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//part7-50

// Route::get('/index', function(){
//     echo 'fuck you all';
// });

Route::get('/index', [homeController::class , 'index']);
Route::get('/test', [testController::class , 'index']);
Route::get('/category', [categoryController::class , 'index']);
