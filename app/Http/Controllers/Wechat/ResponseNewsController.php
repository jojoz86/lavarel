<?php

namespace App\Http\Controllers\Wechat;


use App\Models\ResponseNews;
use App\Services\WechatService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ResponseNewsController extends Controller
{
        public function __construct()
        {
            $this->middleware('admin.auth',[
                'except'=>[],
            ]);
        }

    public function index()
    {
        $field = ResponseNews::all();
//        dd($field);
        return view('wechat.response_news.index',compact('field'));
    }


    public function create(WechatService $wechatService)
    {
        $ruleView=$wechatService->ruleView();
//        dd($ruleView);
        return view('wechat.response_news.create',compact('ruleView'));
    }


    public function store(Request $request,WechatService $wechatService)
    {
//        dd($request->all());
//        开启事务
        DB::beginTransaction();
//        dd($request->data);
        $rule = $wechatService->ruleStore('news');
//        添加回复内容
       ResponseNews::create([
           'data'=>$request['data'],
           'rule_id'=>$rule['id'],
       ]);
//       事务提交
        DB::commit();
        return redirect()->route('wechat.response_news.index')->with('success','操作成功');
    }


    public function show(ResponseNews $responseNews)
    {
        //
    }

    public function edit(ResponseNews $responseNews,WechatService $wechatService)
    {
//        dd($wechatService['data']);
        $ruleView = $wechatService->ruleView($responseNews['rule_id']);
        return view('wechat.response_news.edit',compact('ruleView','responseNews'));
    }
    public function update(Request $request, ResponseNews $responseNews,WechatService $wechatService)
    {
        //开启事务
        DB::beginTransaction();
//        dd($responseText);
        //更新规则表和关键词表
        $wechatService->ruleUpdate($responseNews['rule_id']);
        //更新回复表
        $responseNews->update([
            'data'=>$request['data'],
            'rule_id'=>$responseNews['rule_id'],
        ]);
        //事务提交
        DB::commit();
        return redirect()->route('wechat.response_news.index')->with('success','操作成功');


    }


    public function destroy(ResponseNews $responseNews)
    {
        $responseNews->rule()->delete();
        return redirect()->route('wechat.response_news.index')->with('success','操作成功');
    }
}
