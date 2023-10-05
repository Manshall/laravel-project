<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NewsController;
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

Route::get('info', function(){
    echo 'info';
});

Route::get('register', function(){
    echo 'register';
});

Route::get('login', function(){
    return view('login');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::get('/show', [NewsController::class, 'show']);
Route::get('/create', [NewsController::class, 'create']);