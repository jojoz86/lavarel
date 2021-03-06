<?php
//助手函数
//在已经定义的函数列表（包括系统自带的函数和用户自定义的函数）中查找 function_name。
       //************
if(!function_exists('hd_config')){
    //帮助读取后台配置项数据
    function hd_config($var){
//        dd($var);
        static $cache = [];
//        explode() 函数把字符串打散为数组。
        $info = explode('.',$var);
//        dd($info);
        if(!$cache){
            //清空所有缓存
            //Cache::flush();
            //获取缓存中config_cache数据,如果数据不存在,那么会以第二个参数作为默认值
            $cache = Cache::get('config_cache',function(){
                return \App\Models\Config::pluck('data','name');
            });
            //dd($cache);
        }
        //isset($cache[$info[0]][$info[1]])?$cache[$info[0]][$info[1]]:''
//        ??=isset
        return $cache[$info[0]][$info[1]]??'';
    }
}