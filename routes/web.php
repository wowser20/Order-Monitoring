<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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


Route::view('/home','home')->name('home');
Route::view('/setting','setting')->name('setting');

Route::view('/index','index')->name('index');
Route::view('/register','register')->name('register');




Route::get('login',[UserController::class,'login'])->name('login');
Route::get('register',[UserController::class,'register'])->name('register');
Route::get('/order',[OrderController::class,'index'])->name('order');
Route::get('/account',[UserController::class,'index'])->name('account');
Route::get('/setting',[CategoryController::class,'index'])->name('setting');


Route::post('registervalidate',[UserController::class,'registervalidate'])->name('registervalidate');
Route::post('loginvalidate',[UserController::class,'loginvalidate'])->name('loginvalidate');

Route::resource('orders',OrderContrsssssssssssssssssssssssssssssssssssssssssssssoller::class);
Route::resource('users',UserController::class);
Route::resource('categories',CategoryController::class);





