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
//Home\HomeController@index控制器目录，获取网站首页
Route::get('/','Home\HomeController@index')->name('home');
//前台
//prefix为home,获取前缀homeu首页控制器目录
Route::group(['prefix'=>'home','namespace'=>'Home','as'=>'home.'],function(){
//     获取index首页
    Route::get('/','HomeController@index')->name('index');
    //文章管理
//    ArticleController是home控制器止录下的文章控制器类
//    article是取ArticleController前面的名字
    Route::resource('article','ArticleController');
//    评论
//    comment是取CommentController前面的名字
     Route::resource('comment','CommentController');
//     点赞  取消赞
    Route::get('zan/make','ZanController@make')->name('zan.make');
//     收藏   取消收藏
    Route::get('collect/make','CollectController@make')->name('collect.make');
    //搜索
    Route::get('search','HomeController@search')->name('search');
});
//会员中心
//prefix是member用户控制器目录
Route::group(['prefix'=>'member','namespace'=>'Member','as'=>'member.'],function(){
    //用户管理
//    UserController*****************************因有两个
//    user取UserController前面的名字
    Route::resource('user','UserController');
    //定义关注取消关注
//    UserController@attention是会员member控制器下关注方法
//    attention/{user}要与attention方法的参数$user保持一至
    Route::get('attention/{user}','UserController@attention')->name('attention');
//    我的粉丝
//    UserController@myFans是会员member控制器下我的粉丝方法
    Route::get('get_fans/{user}','UserController@myFans')->name('my_fans');
//    UserController@myFollowing会员member控制器下我关注的方法
//    get_following/{user}是views/member模板下的模板文件，{user}要与控制器$user参数一致
    Route::get('get_following/{user}','UserController@myFollowing')->name('my_following');
//    我的点赞
    Route::get('get_zan/{user}','UserController@myZan')->name('my_zan');
//   我的所有通知
    Route::get('notify/{user}','NotifyController@index')->name('notify');
    //标记已读
    Route::get('notify/show/{notify}','NotifyController@show')->name('notify.show');
    //    我的收藏
    Route::get('get_collects/{user}','UserController@mycollects')->name('my_collects');
});

//用户管理
//UserController@login是Controllers控制器下的类里面的方法
//get与post请求区别**********************
Route::get('/login','UserController@login')->name('login');
Route::post('/login','UserController@loginForm')->name('login');
Route::get('/register','UserController@register')->name('register');
Route::post('/register','UserController@store')->name('register');
Route::get('/password_reset','UserController@passwordReset')->name('password_reset');
Route::post('/password_reset','UserController@passwordResetForm')->name('password_reset');
Route::get('/logout','UserController@logout')->name('logout');

//工具类
//prefix前缀，util是CodeController.php控制器目录
Route::group(['prefix'=>'util','namespace'=>'Util','as'=>'util.'],function(){
    //发送验证码，
    //在注册页面login.blade.php的hdjs前端插件有设置url: '{{route('util.code.send')}}'
//    user/login.blade.php、password_reset.blade.php、register.blade.php均有设置此路由
    Route::any('/code/send','CodeController@send')->name('code.send');
    //上传，

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
//    后台配置项管理
//    {name}是地址栏的参数与控制器的$name数据库name键名一致
    Route::get('config/edit/{name}','ConfigController@edit')->name('config.edit');
    Route::post('config/update/{name}','ConfigController@update')->name('config.update');
//     轮播图
    Route::resource('flash','FlashControlle');
});

//微信管理
Route::group(['prefix'=>'wechat','namespace'=>'Wechat','as'=>'wechat.'],function (){
//    菜单管理
    Route::resource('button','ButtonController');
    Route::get('button/push/{button}','ButtonController@push')->name('button.push');
//    微信通信地址
    Route::get('api/handler','ApiController@handler')->name('api.handler');
    //基本文本回复
    Route::resource('response_text','ResponseTextController');
//    图文回复
    Route::resource('response_news','ResponseNewsController');

    //基本回复  关注回复以及默认回复
    Route::resource('response_base','ResponseBaseController');
});

//广告轮播图
Route::group(['prefix'=>'advert','namespace'=>'Advert','as'=>'advert.'],function (){
//    首页轮播图
    Route::resource('carousel','CarouselController');
    Route::get('carousel/create','CarouselController@create')->name('carousel.create');

});
