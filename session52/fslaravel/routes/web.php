<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[authController::class , 'register']);
Route::post('/postregister',[authController::class , 'postregister']);
Route::get('/login',[authController::class , 'login'])->name('login');
Route::post('/postlogin',[authController::class , 'postlogin']);
Route::get("/home",[HomeController::class , 'index']);
Route::get("/logout",[authController::class , 'logout']);
Route::get("/superadmin",[HomeController::class , 'Superadmin'])->middleware('admin');
