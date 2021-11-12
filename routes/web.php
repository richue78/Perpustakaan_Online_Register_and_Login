<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControler;
use App\Http\Controllers\register;

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
    return view('layout.home');
});

Route::get('/login',[LoginControler::class,'index']);
Route::get('/register',[register::class,'index']);
