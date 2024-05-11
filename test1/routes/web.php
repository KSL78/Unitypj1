<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[ProductController::class,'index'])->name('product.index');

// Route::get('/users/{name?}', function ($name = NULL) {
//     return 'welcome, '. $name;
// })->where('name','[a-zA-Z0-9]+');

// Route::get('/product/{id?}', function ($id = NULL) {
//     return '제품 id:'. $id;
// })->where('id','[0-9]+');

Route::get('/home/{name?}', [HomeController::class,'index'])->name('home.index');
//Route::get('/{name}', [HomeController::class, 'index'])->name('home.index');
// laravel 8 이상부터 namespace대신 use씀

Route::get('/user/{name?}', function ($name = NULL) {
    $age = 10;
    return view('user',compact('name','age')); // $name -> 'name'
});
Route ::get('/test1',function(){
    return view('test1', ['name' => '<script>alert("1");</script>']);
});



