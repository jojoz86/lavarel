<?php
namespace App\Services;

use Houdunwang\WeChat\WeChat;

class WechatService{
    public function __construct()
    {
//        与微信通信绑定
//        读取 config/hd_config.php配置文件
//        config()读取框架配置项，框架配置项读取 env 对应数据，env 数据来源我们自已后台
//        hd_wechat最终读取的是微信公众号 参数，在后台配置
        $config = config('hd_wechat');//config 函数是框架
//        dd($config);
        WeChat::config($config);;
        WeChat::valid();
    }
}