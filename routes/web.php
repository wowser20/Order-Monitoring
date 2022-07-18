<?php
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
Route::view('/account','account')->name('account');
Route::view('/order','order')->name('order');
Route::view('/register','register')->name('register');
Route::view('/add','add')->name('add');
Route::view('/edit','edit')->name('edit');


Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/register',[UserController::class,'register'])->name('register');

Route::post('registervalidate',[UserController::class,'registervalidate'])->name('registervalidate');
Route::post('loginvalidate',[UserController::class,'loginvalidate'])->name('loginvalidate');
