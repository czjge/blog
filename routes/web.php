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

// SPA
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// 后台
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/post-article', 'HomeController@postArticle')->name("post-article");
Route::get('/edit/{id}', 'HomeController@edit');
Route::post('/edit', 'HomeController@postEdit')->name("edit-article");


// API
Route::post('index/{page}', 'Api\PostController@index');
Route::post('post/{id}', 'Api\PostController@detail');
Route::post('post/category/{cate_id}/{page}', 'Api\PostController@category');
Route::post('post/search/{kwd}/{page}', 'Api\PostController@search');