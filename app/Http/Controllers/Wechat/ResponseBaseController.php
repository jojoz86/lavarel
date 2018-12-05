<?php

namespace App\Http\Controllers\Wechat;

use App\models\ResponseBase;
use App\Models\ResponseNews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResponseBaseController extends Controller
{


    public function create()
    {
        $field = ResponseBase::find(1);

//        dd($field);
        return view('wechat.response_base.create',compact('field'));
    }


    public function store(Request $request)
    {
        $responseBase = ResponseBase::firstOrNew(['id'=>1]);
        $responseBase['data'] = $request->all();
        $responseBase->save();
        return back()->with('success','操作成功');
    }


    public function show(ResponseBase $responseBase)
    {
        //
    }


    public function edit(ResponseBase $responseBase)
    {
        //
    }


    public function update(Request $request, ResponseBase $responseBase)
    {
        //
    }


    public function destroy(ResponseBase $responseBase)
    {
        //
    }
}
