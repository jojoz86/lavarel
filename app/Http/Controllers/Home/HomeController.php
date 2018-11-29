<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use App\Models\Comment;
use HieuLe\Active\Active;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class HomeController extends Controller
{
    public function index(){
        //得到当前登录用户的信息
//        dd(auth()->user());
        //获取所有动态
        $actives = Activity::latest()->paginate(5);

        //渲染模板页面
        return view('home.index',compact('actives'));
    }

    public function search(Request $request){
        //接受搜索的关键词
        $wd = $request->query('wd');
//        dd($wd);
//        不考虑分类筛选
        $articles = Article::search($wd)->paginate(10);
        return view('home.search',compact('articles'));
    }
}
