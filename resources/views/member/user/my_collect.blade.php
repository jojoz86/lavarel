@extends('home.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            @include('member.layouts.menu')
            <div class="col-sm-9">

                @if($collects->count() == 0)
                    <p class="text-muted text-center p-5">暂无收藏</p>
                @else
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($collects as $collect)

                                    <div class="col-sm-9">

                                    <!-- Title -->
                                    <h4 class="card-title mb-1 name">
                                        <a href="">title</a>
                                    </h4>

                                    <p class="card-text small mb-1">
                                        <a href="" class="text-secondary mr-2">
                                            <i class="fa fa-user-circle" aria-hidden="true">icon</i>
                                        {{--Carbon 处理时间库--}}
                                        <i class="fa fa-clock-o" aria-hidden="true">name</i>

                                        <a href="http://www.houdunren.com/edu/topics_1.html" class="text-secondary ml-2">
                                            <i class="fa fa-folder-o" aria-hidden="true"></i>name</a>
                                    </p>

                                </div>

                            @endforeach

                        {{$collects->links()}}
                    </div>
                @endif
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