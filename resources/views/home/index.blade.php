
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

                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">

                        <!-- List group -->
                        <div class="list-group list-group-flush my--3">
                            @foreach($actives as $active)
                                @if($active['log_name']=='article')
                                    @include('home.layouts._article')
                                @elseif($active['log_name']=='comment')
                                    @include('home.layouts._comment')
                                @endif
                            @endforeach
                        </div>

                    </div>
                    <!-- List -->
                </div> <!-- / .card -->
                {{$actives->links()}}
            </div>
            <div class="col-12 col-xl-8">

                <!-- Goals -->
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('org/images/advert/ad1.jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('org/images/advert/ad2.jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('org/images/advert/ad3.jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('org/images/advert/ad5.jpg')}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('org/images/advert/ad7.jpg')}}" alt="">
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-white"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>

                    </div>

                </div>

        <div class="col-12">

              {{--*****************--}}
            <div class="row align-items-center">
                <div class="col">

                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-overflow header-tabs">
                        <li class="nav-item">
                            <a href="profile-posts.html" class="nav-link">
                                产品展示
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="profile-groups.html" class="nav-link">
                                新闻中心
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="profile-projects.html" class="nav-link">
                              合作单位
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="profile-files.html" class="nav-link">
                                留言中心
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="profile-subscribers.html" class="nav-link active">
                                关于我们
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            {{--****************--}}

                 {{--&&&&&&&&&&&&&--}}
            <div class="col-12" data-toggle="lists" data-lists-class="listAlias" data-lists-values="[&quot;name&quot;]">

                    <div class="row mb-4">
                        <div class="col">



                        </div>
                        <div class="col-auto">


                        </div>
                    </div> <!-- / .row -->

                    <!-- Tab content -->
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tabPaneOne" role="tabpanel">
                            <div class="row listAlias"><div class="col-12 col-md-6 col-xl-4">

                                    <!-- Card -->
                                    <div class="card">
                                        <a href="project-overview.html">
                                            <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="card-img-top">
                                        </a>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">

                                                    <!-- Title -->
                                                    <h4 class="card-title mb-2 name">
                                                        <a href="project-overview.html">Homepage Redesign</a>
                                                    </h4>

                                                    <!-- Subtitle -->
                                                    <p class="card-text small text-muted">
                                                        Updated 4hr ago
                                                    </p>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                            <!-- Divider -->
                                            <hr>

                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col-auto">

                                                            <div class="small mr-2">29%</div>

                                                        </div>
                                                        <div class="col">

                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->
                                                </div>
                                                <div class="col-auto">

                                                    <!-- Avatar group -->
                                                    <div class="avatar-group">
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                        </div> <!-- / .card-body -->
                                    </div>

                                </div><div class="col-12 col-md-6 col-xl-4">

                                    <!-- Card -->
                                    <div class="card">
                                        <a href="project-overview.html">
                                            <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="card-img-top">
                                        </a>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">

                                                    <!-- Title -->
                                                    <h4 class="card-title mb-2 name">
                                                        <a href="project-overview.html">Travels &amp; Time</a>
                                                    </h4>

                                                    <!-- Subtitle -->
                                                    <p class="card-text small text-muted">
                                                        Updated 4hr ago
                                                    </p>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                            <!-- Divider -->
                                            <hr>

                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col-auto">

                                                            <div class="small mr-2">77%</div>

                                                        </div>
                                                        <div class="col">

                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->
                                                </div>
                                                <div class="col-auto">

                                                    <!-- Avatar group -->
                                                    <div class="avatar-group">
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                        </div> <!-- / .card-body -->
                                    </div>

                                </div><div class="col-12 col-md-6 col-xl-4">

                                    <!-- Card -->
                                    <div class="card">
                                        <a href="project-overview.html">
                                            <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="card-img-top">
                                        </a>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">

                                                    <!-- Title -->
                                                    <h4 class="card-title mb-2 name">
                                                        <a href="project-overview.html">Safari Exploration</a>
                                                    </h4>

                                                    <!-- Subtitle -->
                                                    <p class="card-text small text-muted">
                                                        Updated 4hr ago
                                                    </p>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                            <!-- Divider -->
                                            <hr>

                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col-auto">

                                                            <div class="small mr-2">100%</div>

                                                        </div>
                                                        <div class="col">

                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->
                                                </div>
                                                <div class="col-auto">

                                                    <!-- Avatar group -->
                                                    <div class="avatar-group">
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                        </div> <!-- / .card-body -->
                                    </div>

                                </div><div class="col-12 col-md-6 col-xl-4">

                                    <!-- Card -->
                                    <div class="card">
                                        <a href="project-overview.html">
                                            <img src="assets/img/avatars/projects/project-4.jpg" alt="..." class="card-img-top">
                                        </a>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">

                                                    <!-- Title -->
                                                    <h4 class="card-title mb-2 name">
                                                        <a href="project-overview.html">Personal Site</a>
                                                    </h4>

                                                    <!-- Subtitle -->
                                                    <p class="card-text small text-muted">
                                                        Updated 4hr ago
                                                    </p>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                            <!-- Divider -->
                                            <hr>

                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col-auto">

                                                            <div class="small mr-2">12%</div>

                                                        </div>
                                                        <div class="col">

                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->
                                                </div>
                                                <div class="col-auto">

                                                    <!-- Avatar group -->
                                                    <div class="avatar-group">
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                        </div> <!-- / .card-body -->
                                    </div>

                                </div><div class="col-12 col-md-6 col-xl-4">

                                    <!-- Card -->
                                    <div class="card">
                                        <a href="project-overview.html">
                                            <img src="assets/img/avatars/projects/project-5.jpg" alt="..." class="card-img-top">
                                        </a>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">

                                                    <!-- Title -->
                                                    <h4 class="card-title mb-2 name">
                                                        <a href="project-overview.html">Wander (iOS)</a>
                                                    </h4>

                                                    <!-- Subtitle -->
                                                    <p class="card-text small text-muted">
                                                        Updated 4hr ago
                                                    </p>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                            <!-- Divider -->
                                            <hr>

                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col-auto">

                                                            <div class="small mr-2">80%</div>

                                                        </div>
                                                        <div class="col">

                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->
                                                </div>
                                                <div class="col-auto">

                                                    <!-- Avatar group -->
                                                    <div class="avatar-group">
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                        </div> <!-- / .card-body -->
                                    </div>

                                </div><div class="col-12 col-md-6 col-xl-4">

                                    <!-- Card -->
                                    <div class="card">
                                        <a href="project-overview.html">
                                            <img src="assets/img/avatars/projects/project-6.jpg" alt="..." class="card-img-top">
                                        </a>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">

                                                    <!-- Title -->
                                                    <h4 class="card-title mb-2 name">
                                                        <a href="project-overview.html">Wander (Web)</a>
                                                    </h4>

                                                    <!-- Subtitle -->
                                                    <p class="card-text small text-muted">
                                                        Updated 4hr ago
                                                    </p>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                            <!-- Divider -->
                                            <hr>

                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col-auto">

                                                            <div class="small mr-2">65%</div>

                                                        </div>
                                                        <div class="col">

                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->
                                                </div>
                                                <div class="col-auto">

                                                    <!-- Avatar group -->
                                                    <div class="avatar-group">
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                        </a>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                        </div> <!-- / .card-body -->
                                    </div>

                                </div></div> <!-- / .row -->
                        </div>
                        <div class="tab-pane fade" id="tabPaneTwo" role="tabpanel">
                            <div class="row list"><div class="col-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <a href="project-overview.html" class="avatar avatar-lg avatar-4by3">
                                                        <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                                    </a>

                                                </div>
                                                <div class="col ml--2">

                                                    <!-- Title -->
                                                    <h4 class="card-title mb-1 name">
                                                        <a href="project-overview.html">Homepage Redesign</a>
                                                    </h4>

                                                    <!-- Text -->
                                                    <p class="card-text small text-muted mb-1">
                                                        <time datetime="2018-06-21">Updated 2hr ago</time>
                                                    </p>

                                                    <!-- Progress -->
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col-auto">

                                                            <div class="small mr-2">29%</div>

                                                        </div>
                                                        <div class="col">

                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Avatar group -->
                                                    <div class="avatar-group d-none d-md-inline-flex">
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->
                                        </div> <!-- / .card-body -->
                                    </div>

                                </div><div class="col-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <a href="project-overview.html" class="avatar avatar-lg avatar-4by3">
                                                        <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                                    </a>

                                                </div>
                                                <div class="col ml--2">

                                                    <!-- Title -->
                                                    <h4 class="card-title mb-1 name">
                                                        <a href="project-overview.html">Travels &amp; Time</a>
                                                    </h4>

                                                    <!-- Text -->
                                                    <p class="card-text small text-muted mb-1">
                                                        <time datetime="2018-06-21">Updated 5hr ago</time>
                                                    </p>

                                                    <!-- Progress -->
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col-auto">

                                                            <div class="small mr-2">77%</div>

                                                        </div>
                                                        <div class="col">

                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Avatar group -->
                                                    <div class="avatar-group d-none d-md-inline-flex">
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->
                                        </div> <!-- / .card-body -->
                                    </div>

                                </div><div class="col-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <a href="project-overview.html" class="avatar avatar-lg avatar-4by3">
                                                        <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                                    </a>

                                                </div>
                                                <div class="col ml--2">

                                                    <!-- Title -->
                                                    <h4 class="card-title mb-1 name">
                                                        <a href="project-overview.html">Safari Exploration</a>
                                                    </h4>

                                                    <!-- Text -->
                                                    <p class="card-text small text-muted mb-1">
                                                        <time datetime="2018-06-21">Updated 1hr ago</time>
                                                    </p>

                                                    <!-- Progress -->
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col-auto">

                                                            <div class="small mr-2">100%</div>

                                                        </div>
                                                        <div class="col">

                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Avatar group -->
                                                    <div class="avatar-group d-none d-md-inline-flex">
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->
                                        </div> <!-- / .card-body -->
                                    </div>

                                </div><div class="col-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <a href="project-overview.html" class="avatar avatar-lg avatar-4by3">
                                                        <img src="assets/img/avatars/projects/project-4.jpg" alt="..." class="avatar-img rounded">
                                                    </a>

                                                </div>
                                                <div class="col ml--2">

                                                    <!-- Title -->
                                                    <h4 class="card-title mb-1 name">
                                                        <a href="project-overview.html">Personal Site</a>
                                                    </h4>

                                                    <!-- Text -->
                                                    <p class="card-text small text-muted mb-1">
                                                        <time datetime="2018-06-21">Updated 2d ago</time>
                                                    </p>

                                                    <!-- Progress -->
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col-auto">

                                                            <div class="small mr-2">12%</div>

                                                        </div>
                                                        <div class="col">

                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Avatar group -->
                                                    <div class="avatar-group d-none d-md-inline-flex">
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->
                                        </div> <!-- / .card-body -->
                                    </div>

                                </div><div class="col-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <a href="project-overview.html" class="avatar avatar-lg avatar-4by3">
                                                        <img src="assets/img/avatars/projects/project-5.jpg" alt="..." class="avatar-img rounded">
                                                    </a>

                                                </div>
                                                <div class="col ml--2">

                                                    <!-- Title -->
                                                    <h4 class="card-title mb-1 name">
                                                        <a href="project-overview.html">Wander (iOS)</a>
                                                    </h4>

                                                    <!-- Text -->
                                                    <p class="card-text small text-muted mb-1">
                                                        <time datetime="2018-06-21">Updated 4hr ago</time>
                                                    </p>

                                                    <!-- Progress -->
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col-auto">

                                                            <div class="small mr-2">80%</div>

                                                        </div>
                                                        <div class="col">

                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Avatar group -->
                                                    <div class="avatar-group d-none d-md-inline-flex">
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->
                                        </div> <!-- / .card-body -->
                                    </div>

                                </div><div class="col-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <a href="project-overview.html" class="avatar avatar-lg avatar-4by3">
                                                        <img src="assets/img/avatars/projects/project-6.jpg" alt="..." class="avatar-img rounded">
                                                    </a>

                                                </div>
                                                <div class="col ml--2">

                                                    <!-- Title -->
                                                    <h4 class="card-title mb-1 name">
                                                        <a href="project-overview.html">Wander (Web)</a>
                                                    </h4>

                                                    <!-- Text -->
                                                    <p class="card-text small text-muted mb-1">
                                                        <time datetime="2018-06-21">Updated 18hr ago</time>
                                                    </p>

                                                    <!-- Progress -->
                                                    <div class="row align-items-center no-gutters">
                                                        <div class="col-auto">

                                                            <div class="small mr-2">65%</div>

                                                        </div>
                                                        <div class="col">

                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>

                                                        </div>
                                                    </div> <!-- / .row -->

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Avatar group -->
                                                    <div class="avatar-group d-none d-md-inline-flex">
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#!" class="dropdown-item">
                                                                Action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Another action
                                                            </a>
                                                            <a href="#!" class="dropdown-item">
                                                                Something else here
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->
                                        </div> <!-- / .card-body -->
                                    </div>

                                </div></div> <!-- / .row -->
                        </div>
                    </div> <!-- / .tab-content -->

                </div>
                       {{--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&7--}}

        </div>
        </div>


    <script>

        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            effect: 'fade',
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>



@endsection

        @push('css')

            <style>
                .border{
                    border-color: red!important;
                }

                 html, body {
                     position: relative;
                     height: 100%;
                 }
                body {
                    background: #eee;
                    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                    font-size: 14px;
                    color:#000;
                    margin: 0;
                    padding: 0;
                }
                .swiper-container {
                    width: 100%;
                    height: 100%;
                }
                .swiper-slide {
                    background-position: center;
                    background-size: cover;
                }

            </style>
    @endpush
@push('js')

    <script>

        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            effect: 'fade',
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>
@endpush
