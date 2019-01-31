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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('index/{page}', 'Api\PostController@index');
Route::post('post/{id}', 'Api\PostController@detail');
Route::post('post/category/{cate_id}/{page}', 'Api\PostController@category');
Route::post('post/search/{kwd}/{page}', 'Api\PostController@search');