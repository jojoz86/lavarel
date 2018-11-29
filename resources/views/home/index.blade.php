
@extends('home.layouts.master')
{{--子模板，@section指令正像其名字所暗示的一样是用来定义一个视图片断（section）的，--}}
{{--在父模板master@yield（'content'）占位符处显示--}}
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-xl-4">
                <!-- Projects -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    动态
                                </h4>

                            </div>
                            {{--<div class="col-auto">--}}

                                {{--<!-- Link -->--}}
                                {{--<a href="#!" class="small">View all</a>--}}

                            {{--</div>--}}
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">

                        <!-- List group -->
                        <div class="list-group list-group-flush my--3">
                            @foreach($actives as $active)
                                @if($active['log_name']=='article')
                                    @include('home.layouts._article')
                                @elseif($active['log_name'=='comment'])
                                    @include('home.layouts._comment')
                                @endif
                            @endforeach
                        </div>

                    </div>
                    <!-- List -->
                </div> <!-- / .card -->
                {{$actives->links()}}
            </div>
            {{--<div class="col-12 col-xl-8">--}}

                {{--<!-- Goals -->--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">--}}
                        {{--<div class="row align-items-center">--}}
                            {{--<div class="col">--}}

                                {{--<!-- Title -->--}}
                                {{--<h4 class="card-header-title">--}}
                                    {{--Goals--}}
                                {{--</h4>--}}

                            {{--</div>--}}
                            {{--<div class="col-auto">--}}

                                {{--<!-- Button -->--}}
                                {{--<a href="#!" class="btn btn-sm btn-white">--}}
                                    {{--Export--}}
                                {{--</a>--}}

                            {{--</div>--}}
                        {{--</div> <!-- / .row -->--}}
                    {{--</div>--}}
                    {{--<div class="table-responsive mb-0" data-toggle="lists" data-lists-values="[&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]">--}}
                        {{--<table class="table table-sm table-nowrap card-table">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th>--}}
                                    {{--<a href="#" class="text-muted sort" data-sort="goal-project">--}}
                                        {{--Goal--}}
                                    {{--</a>--}}
                                {{--</th>--}}
                                {{--<th>--}}
                                    {{--<a href="#" class="text-muted sort" data-sort="goal-status">--}}
                                        {{--Status--}}
                                    {{--</a>--}}
                                {{--</th>--}}
                                {{--<th>--}}
                                    {{--<a href="#" class="text-muted sort" data-sort="goal-progress">--}}
                                        {{--Progress--}}
                                    {{--</a>--}}
                                {{--</th>--}}
                                {{--<th>--}}
                                    {{--<a href="#" class="text-muted sort" data-sort="goal-date">--}}
                                        {{--Due date--}}
                                    {{--</a>--}}
                                {{--</th>--}}
                                {{--<th class="text-right">--}}
                                    {{--Team--}}
                                {{--</th>--}}
                                {{--<th></th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody class="list"><tr>--}}
                                {{--<td class="goal-project">--}}
                                    {{--Update the API--}}
                                {{--</td>--}}
                                {{--<td class="goal-status">--}}
                                    {{--<span class="text-warning">●</span> In progress--}}
                                {{--</td>--}}
                                {{--<td class="goal-progress">--}}
                                    {{--55%--}}
                                {{--</td>--}}
                                {{--<td class="goal-date">--}}
                                    {{--<time datetime="2018-10-24">07/24/18</time>--}}
                                {{--</td>--}}
                                {{--<td class="text-right">--}}
                                    {{--<div class="avatar-group">--}}
                                        {{--<a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Dianna Smiley">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                        {{--<a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                        {{--<a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                        {{--<a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                                {{--<td class="text-right">--}}
                                    {{--<div class="dropdown">--}}
                                        {{--<a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                            {{--<i class="fe fe-more-vertical"></i>--}}
                                        {{--</a>--}}
                                        {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Action--}}
                                            {{--</a>--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Another action--}}
                                            {{--</a>--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Something else here--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                            {{--</tr><tr>--}}
                                {{--<td class="goal-project">--}}
                                    {{--Release v1.2-Beta--}}
                                {{--</td>--}}
                                {{--<td class="goal-status">--}}
                                    {{--<span class="text-warning">●</span> In progress--}}
                                {{--</td>--}}
                                {{--<td class="goal-progress">--}}
                                    {{--25%--}}
                                {{--</td>--}}
                                {{--<td class="goal-date">--}}
                                    {{--<time datetime="2018-10-24">08/26/18</time>--}}
                                {{--</td>--}}
                                {{--<td class="text-right">--}}
                                    {{--<div class="avatar-group justify-content-end">--}}
                                        {{--<a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Dianna Smiley">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                        {{--<a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                        {{--<a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                                {{--<td class="text-right">--}}
                                    {{--<div class="dropdown">--}}
                                        {{--<a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                            {{--<i class="fe fe-more-vertical"></i>--}}
                                        {{--</a>--}}
                                        {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Action--}}
                                            {{--</a>--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Another action--}}
                                            {{--</a>--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Something else here--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                            {{--</tr><tr>--}}
                                {{--<td class="goal-project">--}}
                                    {{--GDPR Compliance--}}
                                {{--</td>--}}
                                {{--<td class="goal-status">--}}
                                    {{--<span class="text-success">●</span> Completed--}}
                                {{--</td>--}}
                                {{--<td class="goal-progress">--}}
                                    {{--100%--}}
                                {{--</td>--}}
                                {{--<td class="goal-date">--}}
                                    {{--<time datetime="2018-10-24">06/19/18</time>--}}
                                {{--</td>--}}
                                {{--<td class="text-right">--}}
                                    {{--<div class="avatar-group justify-content-end">--}}
                                        {{--<a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Dianna Smiley">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                        {{--<a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                        {{--<a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                                {{--<td class="text-right">--}}
                                    {{--<div class="dropdown">--}}
                                        {{--<a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                            {{--<i class="fe fe-more-vertical"></i>--}}
                                        {{--</a>--}}
                                        {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Action--}}
                                            {{--</a>--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Another action--}}
                                            {{--</a>--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Something else here--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                            {{--</tr><tr>--}}
                                {{--<td class="goal-project">--}}
                                    {{--v1.2 Documentation--}}
                                {{--</td>--}}
                                {{--<td class="goal-status">--}}
                                    {{--<span class="text-danger">●</span> Cancelled--}}
                                {{--</td>--}}
                                {{--<td class="goal-progress">--}}
                                    {{--0%--}}
                                {{--</td>--}}
                                {{--<td class="goal-date">--}}
                                    {{--<time datetime="2018-10-24">06/25/18</time>--}}
                                {{--</td>--}}
                                {{--<td class="text-right">--}}
                                    {{--<div class="avatar-group justify-content-end">--}}
                                        {{--<a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Dianna Smiley">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                        {{--<a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                                {{--<td class="text-right">--}}
                                    {{--<div class="dropdown">--}}
                                        {{--<a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                            {{--<span class="fe fe-more-vertical"></span>--}}
                                        {{--</a>--}}
                                        {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Action--}}
                                            {{--</a>--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Another action--}}
                                            {{--</a>--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Something else here--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                            {{--</tr><tr>--}}
                                {{--<td class="goal-project">--}}
                                    {{--Plan design offsite--}}
                                {{--</td>--}}
                                {{--<td class="goal-status">--}}
                                    {{--<span class="text-success">●</span> Completed--}}
                                {{--</td>--}}
                                {{--<td class="goal-progress">--}}
                                    {{--100%--}}
                                {{--</td>--}}
                                {{--<td class="goal-date">--}}
                                    {{--<time datetime="2018-10-24">06/30/18</time>--}}
                                {{--</td>--}}
                                {{--<td class="text-right">--}}
                                    {{--<div class="avatar-group justify-content-end">--}}
                                        {{--<a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Dianna Smiley">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                        {{--<a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                        {{--<a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                        {{--<a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">--}}
                                            {{--<img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle border border-white" alt="...">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                                {{--<td class="text-right">--}}
                                    {{--<div class="dropdown">--}}
                                        {{--<a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                            {{--<i class="fe fe-more-vertical"></i>--}}
                                        {{--</a>--}}
                                        {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Action--}}
                                            {{--</a>--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Another action--}}
                                            {{--</a>--}}
                                            {{--<a href="#!" class="dropdown-item">--}}
                                                {{--Something else here--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</td>--}}
                            {{--</tr></tbody>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        </div>
    </div>
@endsection
