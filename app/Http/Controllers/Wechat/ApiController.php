<?php

namespace App\Http\Controllers\Wechat;

use App\Services\WechatService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
//    微信后台接口配置 url填写地址指向该方法
//     调用WechatService,这个类中构造方法进行通信验证
      public function handler(WechatService $wechatService){
//          http://lav.deu/wechat/api/handler
         echo 111;
      }

}
