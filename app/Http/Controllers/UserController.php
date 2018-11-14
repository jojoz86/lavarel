<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){

        return view('user.login');
    }
    //加载注册页面
    public function register(){

        //渲染注册页面
        return view('user.register');
    }

    //用户提交注册
    public function store(UserRequest $request){
        //dd($request->all());
        //将数据存储到数据表
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        //提示并且跳转
        return redirect()->route('login')->with('success','注册成功');
    }
}
