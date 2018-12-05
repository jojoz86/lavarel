<?php

namespace App\Http\Controllers\Wechat;

use App\Models\ResponseText;
use App\Services\WechatService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ResponseTextController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.auth',[
            'except'=>[],
        ]);
    }

    public function index()
    {
        //读取所有回复
        $field = ResponseText::all();
//        打印responsetext模型所有数据
//        dd($field);
        return view('wechat.response_text.index',compact('field'));
    }

//             微信文本添加回复
    public function create(WechatService $wechatService)
    {
//        引入wechatservice类ruleview方法加载规则视图文件
        $ruleView = $wechatService->ruleView();
//        dd($ruleView);
        return view('wechat.response_text.create',compact('ruleView'));
    }




    public function store(Request $request,WechatService $wechatService)
    {
        //开启事务
        DB::beginTransaction();
        //dd($request->data);
        $rule = $wechatService->ruleStore('text');
        //添加回复内容
        ResponseText::create([
            'content'=>$request['data'],
            'rule_id'=>$rule['id'],
        ]);
        //事务提交
        DB::commit();
        return redirect()->route('wechat.response_text.index')->with('success','操作成功');
    }

//       微信文本回复编辑
    public function edit(ResponseText $responseText,WechatService $wechatService)
    {
//        dd($responseText);
        $ruleView = $wechatService->ruleView($responseText['rule_id']);
        //获取回复内容的旧数据
//        dd($responseText);
        return view('wechat.response_text.edit',compact('ruleView','responseText'));
    }

//        update方法操作完成edit编辑才能提交
    public function update(Request $request, ResponseText $responseText,WechatService $wechatService)
    {
//        dd($responseText);
//        更新规则表和关键词表
        $wechatService->ruleupdate($responseText['rule_id']);
//        更新回复表
        $responseText->update([
            'content'=>$request['data'],
            'rule_id'=>$responseText['rule_id'],
        ]);
        return redirect()->route('wechat.response_text.index')->with('success','操作成功');
    }


    public function destroy(ResponseText $responseText)
    {
//        dd($responseText);
        $responseText->rule()->delete();
        return redirect()->route('wechat.response_text.index')->with('success','操作成功');
    }
}
