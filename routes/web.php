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

   Route::group(['prefix'=>"noticias", 'middleware'=>"auth"], function(){
      Route::get('/', "NoticiaController@index");
      Route::get('/create', "NoticiaController@create");
      Route::post('/store', "NoticiaController@store");
      Route::get('/edit/{id_noticia}', "NoticiaController@edit");
      Route::put('/update/{id_noticia}', "NoticiaController@update");
   });

   Route::group(['prefix'=>"publicidades", 'middleware'=>"auth"], function(){
      Route::get('/', "PostPublicitarioController@index");
      Route::get('/create', "PostPublicitarioController@create");
      Route::post('/store', "PostPublicitarioController@store");
      Route::get('/edit/{id_noticia}', "PostPublicitarioController@edit");
      Route::put('/update/{id_noticia}', "PostPublicitarioController@update");
   });
});