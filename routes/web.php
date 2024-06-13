<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function() {
    Auth::routes();
        Route::group(['prefix' => 'dash'], function() {
        Route::resource('categories', CategoryController::class);
        Route::view('/', 'dashboard')->name('dashboard');
        Route::view('/product', 'products.index')->name('products.index');
    });
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/dashboard',function(){
return view('dashboard');
});
Route::get('/product',function(){
return view('products.index');
});
Route::get('/landing',function(){
    return view('landing');
    });
Route::group([
    'middleware'=>'IsAdmin'
],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
Route::get('/index',function(){
    return view('index');

})->name('index');
Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth'])->name('dashboard');
Route::get('/categories',function(){
    return view('views');

})->name('category');
