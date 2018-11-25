<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\ArticleRequest;
use App\models\Article;
use App\Models\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function __construct()
    {
//        构建结构中间组件优选运行，除了首页index.show不优先运行
        $this->middleware('auth',[
            //'only'=>['create','store','edit','update','destroy'],
            'except'=>['index','show']
        ]);
    }


    public function index(Request $request)
    {

//显示后台文章首页index每列显示10个文章，Models/Article.php有定义文章与用户的关联，定义栏目关联
        //测试模型关联
//        $article = Article::find(10);
        //dd($article->toArray());
        //dd($article);
        //dd($article->user);
        //dd($article->user->name);
        //die;
        //找到跟当前文章分类相同所有文章
        //dd($article->category->article->toArray());

        //测试策略
//        $data = Article::find(10);
//        接收category参数

        $category = $request->query('category');
//        Article是models模型里面的方法
        $articles = Article::latest();
        if($category){
            $articles = $articles->where('category_id',$category);
        }
        $articles = $articles->paginate(10);
//        paginate（）分页上一页，下一页
//        $articles = Article::latest()->paginate(10);
        //$articles = Article::latest()->get();
//        dd($articles->toArray());
        $categories = Category::all();
        return view('home.article.index',compact('articles','categories'));
    }

    public function create()
    {
//        首页的文章发表
        //获取所有栏目数据，Models/Category.php
        $categories = Category::all();
//        dd($categories->toArray());
        return view('home.article.create',compact('categories'));

    }


    public function store(ArticleRequest $request,Article $article)
    {
        //获取当前登录用户id
//        dd(auth()->id());
//        dd($request->all());
        $article->title = $request->title;
        $article->category_id = $request->category_id;
        $article->content = $request['content'];
        $article->user_id = auth()->id();
//        dd($article);
        $article->save();
        return redirect()->route('home.article.index')->with('success','文章发布成功');
    }


    public function show(Article $article)
    {
        $user = User::find(1);
        return view('home.article.show',compact('article'));
    }


    public function edit(Article $article)
    {
//        authorize(基于注解的权限认证框架)
        $this->authorize('update',$article);
        //dump($article->toArray());
        //获取所有栏目数据
        $categories = Category::all();
        //dd($categories->toArray());
        return view('home.article.edit',compact('categories','article'));
    }


    public function update(ArticleRequest $request, Article $article)
    {
//        authorize(基于注解的权限认证框架)
        $this->authorize('update',$article);
        $article->title = $request->title;
        $article->category_id = $request->category_id;
        $article->content = $request['content'];
        //$article->user_id = auth()->id();
//        dd($article);
        $article->save();
        return redirect()->route('home.article.index')->with('success','文章编辑成功');
    }


    public function destroy(Article $article)
    {
//        authorize(基于注解的权限认证框架)
        $this->authorize('delete',$article);
        $article->delete();
        return redirect()->route('home.article.index')->with('success','文章删除成功');
    }
}
