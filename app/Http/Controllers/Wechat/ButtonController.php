<?php

namespace App\Http\Controllers\Wechat;


use App\Models\Button;
use App\Services\WechatService;
use Houdunwang\WeChat\WeChat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ButtonController extends Controller
{
       public function __construct()
       {
           $this->middleware('admin.auth',[
               'except'=>[],
           ]);

       }


    public function index()
    {

//         dd(111);
        $buttons = Button::latest()->paginate(5);
//        dd($buttons);
//        加载模板文件
        return view('wechat.button.index',compact('buttons'));
    }

//         微信菜单  添加菜单
    public function create()
    {
        return view('wechat.button.create');
    }

//            *****************
    public function store(Request $request)
    {
//        dd(2);
        Button::create($request->all());
        return redirect()->route('wechat.button.index')->with('success','菜单添加成功');
    }




    public function edit(Button $button)
    {
//        dd($button);
        return view('wechat.button.edit',compact('button'));
    }

//      *********************
    public function update(Request $request, Button $button)
    {
        $data=$request->all();
        $data['status']=0;
        $button->update($data);
//        redirect()**************
        return redirect()->route('wechat.button.index')->with('success','菜单编辑成功');
    }


    public function destroy(Button $button)
    {
//
        $button->delete();
        return redirect()->route('wechat.button.index')->with('success','菜单删除成功');
    }

//    将微信菜单送到公众号
//      推送菜单之前  先实例化WechatService, 该类构造方法有微信通信验证
      public function push(Button $button,WechatService $wechatService){
//            将原来数据库 JSON格式数据转为数组
          $menu = json_decode($button['data'],true);
//          dd($menu);
//          wechat类要求传递惨淡数据需要数组
          $res = WeChat::instance('button')->create($menu);
//          dd($res);
//          errcode错误代码*************
          if($res['errcode'] == 0){
//              ***************
//              将当前菜单数据表status修改1，其余的改为0
//              status是数据buttons数据表字段，哪个微信菜单有推送就给显示1
              $button->update(['status'=>1]);
//              '!='************
              Button::where('id','!=',$button->id)->update(['status'=>0]);
//               success***************
              return back()->with('success','菜单推送成功');
          }else {
//              danger************
//              errmsg***********
              return back()->with('danger', $res['errmsg']);
          }
      }
}
