<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name?}',[HomeController::class,'index'])->name('home.index');

//model = 데이터
//controller = 사용자? 
//view = 표시부?
//? or null 들어가면 넣지 않아도 출력 가능 