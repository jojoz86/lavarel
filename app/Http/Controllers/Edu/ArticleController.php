<?php

namespace App\Http\Controllers\Edu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //列表页
    public function index(){
        return view('edu.article.index');
    }
    //加载添加页面
    public function create(){
        return view('edu.article.create');
    }
    //数据保存
    public function store(Request $request){
        //打印请求数据
        dd($request->all());
    }

}
