<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/animallist', [AnimalController::class, 'anim']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'validasi']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

Route::get('/login/google', [LoginController::class, 'logingoogle']);
Route::get('/login/google/callback', [LoginController::class, 'callbackgoogle']);

Route::get('logout', [LoginController::class, 'logout']);

Route::get('/hello', function () {
    return view('hello');
});
