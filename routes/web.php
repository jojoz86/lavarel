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
Route::get('/edu/article/index','Edu\ArticleController@index')->name('edu.article.index');
Route::get('/edu/article/create','Edu\ArticleController@create')->name('edu.article.create');
Route::post('/deu/article/store','Edu\ArticleController@store')->name('edu.article.store');
//资源路由
Route::resource('/edu/photo','Edu\PhotoController');