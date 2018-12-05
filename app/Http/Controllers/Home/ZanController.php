<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZanController extends Controller
{
    public function __construct()
    {
//        auth中间件对应的中间件在哪里，需要看注册中间件（app/Http/Kernal.php中$routeMiddlware）
//        article/show.blade.php模板中点赞增加,auth 判断用户是否登录
//        没有也可以***********************
        $this->middleware('auth',[
            'only'=>['make']
            ]);
    }

//    点赞  取消赞
    public function make(Request $request){
//        要在模板页加年路由地址才可以打印，同时要设置好此控制器对应的路由为条件
        //dd($request->all());
//        $request请求query访问地址栏的参数及类型type id
        $type = $request->query('type');
        $id = $request->query('id');
//        user_id   zan_id  zan_type
//        打印type是article类型，及在给哪个文章点赞文章id
//        dd($request->all());
//        根据 get 参数 type 组合模型类 class名
        $class = 'App\Models\\' . ucfirst($type);
//       打印 "App\Models\Article"
//        dd($class);
//          在文章处点打印文章数组
//        $model = Article::find($id);
//         在文章处点打印是null
//        $model = Comment::find($id);
//          $model 文章/评论
        $model = $class::find($id);
//        打印的是文章数组******
//        dd($model);



//        获得当前文章/评论 的所有点赞模型数据,
//        在models/article设zan方法下面才能打印（是空数组）
//        在models/comment设zan方法下面才能打印（是空数组）
//             dd($model->zan->all());
//          返回zan 模型   或者 null
//        dd($model->zan->where('user_id',auth()->id())->first());
//        zan是models/Article里面的zan方法，因zan方法有返回给zan.php
//        auth()->id()是当前用户，first()是第一条*******************
        if ($zan = $model->zan->where('user_id',auth()->id())->first()){
//            执行删除
            $zan->delete();
        }else{
//            执行添加
//            打印zan_id是101 ， user_id是0
//            dd($model->zan()->create());
//            *************
            $model->zan()->create(['user_id'=>auth()->id()]);
//            dd($model->zan()->create());
        }
//        判断是否为异步*************
        if ($request->ajax()){
//            这个需要重新获取对应模型，这句话结合异步请求
//            $class是上面对models文件进行的变量赋值
            $newModel = $class::find($id);
            return ['code'=>1,'message'=>'','zan_num'=>$newModel->zan->count()];
        }
        return back();
    }
}
