<?php

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
    return view('index');
});

Route::get('/category','CategoryController@index');
Route::post('/category/store','CategoryController@store');
Route::post('/category/{id}/update','CategoryController@update');
Route::get('/category/{id}/delete','CategoryController@delete');


Route::get('/article','ArticleController@index');
Route::get('/article/create','ArticleController@create');
Route::get('/article/{id}/show','ArticleController@show');
