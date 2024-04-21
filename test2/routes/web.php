<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users/{name?}', function ($name = NULL) {
//     return 'welcome, '. $name;
// })->where('name','[a-zA-Z0-9]+');

// Route::get('/product/{id?}', function ($id = NULL) {
//     return '제품 id:'. $id;
// })->where('id','[0-9]+');

Route::get('/home/{name?}', [HomeController::class,'index'])->name('home.index');
//Route::get('/{name}', [HomeController::class, 'index'])->name('home.index');
// laravel 8 이상부터 namespace대신 use씀