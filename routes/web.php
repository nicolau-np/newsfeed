<?php

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

Route::get('/', "HomeController@index");
Route::get('/contact', "HomeController@contact");

Route::get('/login', "UserController@login")->name('login');
Route::post('/logar', "UserController@logar")->name('logar');

Route::group(['prefix'=>"admin", 'middleware'=>"auth"], function(){
   Route::get('/', "AdminController@index")->name('admin'); 
});