<?php

namespace App\Http\Controllers\Home;


use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectController extends Controller
{
//     收藏  取消收藏
    public function make(Request $request){
//        dd(3);
//        请求 获取(接收) 类型进行赋值
        $type = $request->query('type');
        $id = $request->query('id');
//        打印的是文章类型及文章id
//        dd($request->all());
//        根据 get 参数 type组合模型类 class名
        $class = 'App\Models\\' . ucfirst($type);
//        dd($class);
//        find********************
//        $model = Article::find($id);
//        $model = Comment::find($id);
//        $model 文章/评论
          $model = $class::find($id);
//        dd($model);

//        获取当前文章/评论 的所有收藏模型数据
//        dd($model->collect->all());//打印的是空数组
//           返回  collect模型  或者null
//        collect是models/Article里面的collect方法，因collect方法有返回给collect.php
//        auth()->id()是当前用户，first()是第一条*******************
//          dd($model->collect->where('user_id',auth()->id())->first());
          if ($collect = $model->collect->where('user_id',auth()->id())->first()){
//              执行删除
              $collect->delete();
          }else{
//              执行添加
//              dd($model-collect()->create());
              $model->collect()->create(['user_id'=>auth()->id()]);

          }
//          判断是否为异步
        if ($request->ajax()){
//            这个需要重新取对应模型，这句话结合异步请求
            $newModel = $class::find($id);
            return ['code'=>1,'message'=>'','num'=>$newModel->collect->count()];
        }
        return back();
    }
}
