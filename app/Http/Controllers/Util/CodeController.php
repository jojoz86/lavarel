<?php

namespace App\Http\Controllers\Util;

use App\Notifications\RegisterNotify;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CodeController extends Controller
{
    //发送验证码
    public function send(Request $request)
    {
        //获得所有请求数据
        //dd($request->all());
        //dd($request->username);
        //随机四位验证码
        $code = $this->random();
        //发送验证码（手册：消息通知）
        $user = User::firstOrNew(['email'=>$request->username]);//user模型对象
        //dd($user);
        //dd($user->toArray());
        //需要创建通知类:php artisan make:notification  RegisterNotify
        $user->notify(new RegisterNotify($code));
        //将验证码存入到session中
        session()->put('code',$code);
        //返回数据
        return ['code' => 1, 'message' => '验证码发送成功'];
    }

    //随机获取4位数字验证码
    private function random( $len=4 )
    {
        $str = '';
        for($i=0;$i<$len;$i++){
            $str .= mt_rand(0,9);
        }
        return $str;
    }
}
