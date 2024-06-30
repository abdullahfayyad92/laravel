<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

//user routes

Route::get("/",[UserController::class , 'login']);

Route::get("/login",[UserController::class , 'login'])->name("login");

Route::post("/postlogin",[UserController::class , 'postlogin']);

Route::get("/register",[UserController::class , 'register']);

Route::post("/postregister",[UserController::class , 'postregister']);


Route::get("/logout",[UserController::class , 'logout']);



//product routes 

Route::get("/product/index",[ProductController::class , 'index']);

Route::get("/product/add",[ProductController::class , 'add']);


