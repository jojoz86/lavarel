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

//网站首页
Route::get('/','Home\HomeController@index')->name('home');
//前台
Route::group(['prefix'=>'home','namespace'=>'Home','as'=>'home.'],function(){
    Route::get('/','HomeController@index')->name('index');
    //文章管理
    Route::resource('article','ArticleController');

});
//会员中心
Route::group(['prefix'=>'member','namespace'=>'Member','as'=>'member.'],function(){
    //用户管理
    Route::resource('user','UserController');
    //    定义关注取消关注
    Route::get('attention/{user}','UserController@attention')->name('attention');
//    我的粉丝
    Route::get('get_fans/{user}','UserController@myFans')->name('my_fans');
    Route::get('get_following/{user}','UserController@myFollowing')->name('my_following');
});

//用户管理
Route::get('/login','UserController@login')->name('login');
Route::post('/login','UserController@loginForm')->name('login');
Route::get('/register','UserController@register')->name('register');
Route::post('/register','UserController@store')->name('register');
Route::get('/password_reset','UserController@passwordReset')->name('password_reset');
Route::post('/password_reset','UserController@passwordResetForm')->name('password_reset');
Route::get('/logout','UserController@logout')->name('logout');

//工具类
Route::group(['prefix'=>'util','namespace'=>'Util','as'=>'util.'],function(){
    //发送验证码
    Route::any('/code/send','CodeController@send')->name('code.send');
    //上传
    Route::any('/upload','UploadController@uploader')->name('upload');
    Route::any('/filesLists','UploadController@filesLists')->name('filesLists');
});


//后台路由
Route::group(['middleware' => ['admin.auth'],'prefix'=>'admin','namespace'=>'Admin','as'=>'admin.'],function(){
    Route::get('index','IndexController@index')->name('index');
    //创建模型同时创建迁移文件和工厂
    //artisan make:model --migration --factory Models/Category
    //创建控制器指定模型
    //artisan make:controller --model=Models/Category Admin/CategoryController
    Route::resource('category','CategoryController');
});