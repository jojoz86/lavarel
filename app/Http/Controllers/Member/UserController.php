<?php

namespace App\Http\Controllers\Member;
use App\Models\Article;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth',[
           'only'=>['edit','update','attention']
       ]);
    }


//    显示用户详情
    public function show(User $user)
    {
//         dd($user);
//        获取当前用户发表的文章
        $articles = Article::latest()->where('user_id',$user->id)->paginate(10);
        return view('member.user.show',compact('user','articles'));
    }

//   用户资料个修改
    public function edit(User $user,Request $request)
    {
//        调用策略
        $this->authorize('isMine',$user);
//        接受type参数
        $type=$request->query('type');
        return view('member.user.edit_'.$type,compact('user'));
    }

//    用户资料更新
    public function update(Request $request, User $user)
    {
        $data = $request->all();
//        调用策略
        $this->authorize('isMine',$user);
        $this->validate($request,[
            'password'=>'sometimes|required|min:3|confirmed',
            'name'=>'sometimes|required',
        ],[
            'password.required'=>'请输入密码',
            'password.min'=>'密码不得小于3位',
            'password.confirmed'=>'两次密码不一致',
            'name.required'=>'请输入昵称'
        ]);
//        密码加密
        if ($request->password){
            $data['password']=bcrypt($data['password']);
        }

//        执行更新
        $user->update($data);
        return back()->with('success','操作成功');
    }

//     关注 取消关注   这里user被关注着
    public function attention(User $user)
    {
//        自已不能关注自已
        $this->authorize('isNotMine',$user);
        //dd($user);
        //auth()->user()->following()->toggle($user);
        $user->fans()->toggle(auth()->user());
        return back();
    }

//    我的粉丝
     public function myFans(User $user){
//        获取$user用户的数丝
         $fans = $user->fans()->paginate(10);
//         dd($fans);
         return view('member.user.my_fans',compact('user','fans'));
     }
//     我关注的人
     public function myFollowing(User $user){
//        获取$user用户关注的人
         $followings = $user->following()->paginate(10);
         return view('member.user.my_following',compact('user','followings'));
     }
}
