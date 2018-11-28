@extends('home.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            @include('member.layouts.menu')
            <div class="col-sm-9">

                <div class="col-sm-9">
                    {{--<div class="container-fluid">--}}
                        {{--<div class="header-body mt--5 ">--}}
                            {{--<div class="row align-items-center">--}}

                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="row mt-5">
                            <div class="col-12">
                                <!-- Files -->
                                <div class="card" data-toggle="lists" data-lists-values="[&quot;name&quot;]">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h4 class="card-header-title">

                                                    @can('isMine',$user)
                                                        我收藏的文章
                                                    @else
                                                        他收藏的文章
                                                    @endcan
                                                </h4>
                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                    <div class="card-body">

                                        <!-- List -->
                                        <ul class="list-group list-group-lg list-group-flush list my--4">
                                           @foreach($collects as $collect)
                                                <li class="list-group-item px-0">

                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <!-- Avatar -->

                                                            <a href="{{route('member.user.show',$collect->belongsModel->user)}}" class="avatar avatar-sm">

                                                                <img src="{{$collect->belongsModel->user->icon}}" alt="..." class="avatar-img rounded">
                                                            </a>

                                                        </div>
                                                        <div class="col ml--2">

                                                            <!-- Title -->
                                                            <h4 class="card-title mb-1 name">
                                                                <a href="http://laravel-cms.edu/home/article/1">
                                                                    {{$collect->belongsModel->content}}

                                                                </a>
                                                            </h4>

                                                            <p class="card-text small mb-1">
                                                                <a href="http://laravel-cms.edu/member/user/29" class="text-secondary mr-2">
                                                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                                    {{$collect->belongsModel->user->name}}

                                                                </a>

                                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                {{$collect->belongsModel->created_at->diffForHumans()}}


                                                            </p>

                                                        </div>
                                                        <div class="col-auto">

                                                            <!-- Dropdown -->
                                                            <div class="dropdown">
                                                                <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                    <a href="javascript:;" onclick="del(this)" class="dropdown-item">
                                                                        删除
                                                                    </a>
                                                                    <form action="http://laravel-cms.edu/home/article/1" method="post">
                                                                        <input type="hidden" name="_token" value="QGUQZ8LogH2jmBQKMfnkF2qIyWVqcSZSSAJBBfVM"> <input type="hidden" name="_method" value="DELETE"></form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->

                                                </li>
                                             @endforeach
                                        </ul>

                                    </div>
                                </div>


                            </div>
                        </div> <!-- / .row -->
{{--                        {{$zansData->appends(['type'=>Request::query('type')])->links()}}--}}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('js')
    {{--hdjs里面上传需要再控制台--network中检测数据--}}
    {{--处理上传之前需要创建处理上传控制器方法、配置对应的路由--}}
    {{--需要修改hdjs上传配置项：hdjs.blade.php--}}
    {{--还需要注意上传419状态码--}}
    <script>
        require(['hdjs', 'bootstrap']);

        //上传图片
        function upImagePc() {
            require(['hdjs'], function (hdjs) {
                var options = {
                    multiple: false,//是否允许多图上传
                    //data是向后台服务器提交的POST数据
                    data: {name: '后盾人', year: 2099},
                };
                hdjs.image(function (images) {
                    //alert(1);
                    //将返回的图片路径写入到input表单的val值
                    //提交表单做头像修改
                    $("[name='icon']").val(images[0]);
                    //将上传返回的图片写入avatar-img元素的src
                    $(".avatar-img").attr('src', images[0]);
                    //触发表单提交
                    $('#editIocn').submit();
                }, options)
            });
        }
    </script>
@endpush