@extends('layouts.layout')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
        <ol class="carousel-indicators">
            @for($i=0;$i<5;$i++)
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class=" @if($i==0) active @endif"></li>
            @endfor
        </ol>
        <div class="carousel-inner">
            @for($i=0;$i<5;$i++)
                <div class="carousel-item @if($i==0) active @endif" style="height: 300px;overflow: hidden">
                    <img class="d-block w-100"
                         src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528549325149&di=ac8360605228a18765470c619d197cf6&imgtype=0&src=http%3A%2F%2Fpic.58pic.com%2F58pic%2F13%2F15%2F17%2F39R58PIC8S9_1024.jpg"
                         alt="First slide">
                    <div class="carousel-caption d-none d-md-block  text-primary">
                        <h5>
                            座右铭
                        </h5>
                        <p>
                            人丑就要多读书
                        </p>
                    </div>
                </div>
            @endfor
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-primary mt-1">
            社团推荐<a class="float-right" href="/club/list">更多>></a>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                       href="#list-home" role="tab" aria-controls="home">运动体育</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                       href="#list-profile" role="tab" aria-controls="profile">设计艺术</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                       href="#list-messages" role="tab" aria-controls="messages">电子</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                       href="#list-settings" role="tab" aria-controls="settings">交友</a>
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                             aria-labelledby="list-home-list">
                            <div class="row">
                                <ul class="list-inline">
                                    @for($i=0;$i<10;$i++)
                                        <li class="list-inline-item col-5 col-sm-4 col-md-2 text-center">
                                            <div>
                                                <img class="img-thumbnail rounded"
                                                     src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg">
                                            </div>
                                            <div>
                                                编程爱好者
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel"
                             aria-labelledby="list-profile-list">
                            <div class="row">
                                <ul class="list-inline">
                                    @for($i=0;$i<10;$i++)
                                        <li class="list-inline-item col-5 col-sm-4 col-md-2 text-center">
                                            <div>
                                                <img class="img-thumbnail rounded"
                                                     src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg">
                                            </div>
                                            <div>
                                                交际舞
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel"
                             aria-labelledby="list-messages-list">
                            <div class="row">
                                <ul class="list-inline">
                                    @for($i=0;$i<10;$i++)
                                        <li class="list-inline-item col-5 col-sm-4 col-md-2 text-center">
                                            <div>
                                                <img class="img-thumbnail rounded"
                                                     src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg">
                                            </div>
                                            <div>
                                                机器人爱好者
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel"
                             aria-labelledby="list-settings-list">
                            <div class="row">
                                <ul class="list-inline">
                                    @for($i=0;$i<10;$i++)
                                        <li class="list-inline-item col-5 col-sm-4 col-md-2 text-center">
                                            <div>
                                                <img class="img-thumbnail rounded"
                                                     src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg">
                                            </div>
                                            <div>
                                                旅游爱好者
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 text-primary mt-1">
            社团热门<a class="float-right" href="/club">更多>></a>
        </div>
        <div class="row">
            @for($i=0;$i<6;$i++)
                <div class="row">
                    <div class="media mb-2">
                        <img class="align-self-center mr-2 col-2 rounded"
                             src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg"
                             alt="社团动态">
                        <div class="media-body">
                            <h5 class="mt-0">
                                <a href="#" class="text-dark">轮滑表演</a>
                            </h5>
                            <p>轮滑社团于晚上在钟楼广场进行表演，欢迎大家光临！轮滑社团于晚上在钟楼广场进行表演，欢迎大家光临！</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                <span class="ml-2 small">
                                    <a class="mr-2" href="#">轮滑社团</a>{{date('Y-m-d H:i:s')}}
                                </span>
                                </li>
                                <li class="list-inline-item"><i class="fa fa-heart"></i>10000</li>
                                <li class="list-inline-item"><i class="fa fa-eye"></i>10000</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="col-12 text-primary mt-1">
            热门高校<a class="float-right" href="/school/list">更多>></a>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="list-group" id="list-tab1" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-history-list"
                       data-toggle="list"
                       href="#list-history" role="tab" aria-controls="home">文史类</a>
                    <a class="list-group-item list-group-item-action" id="list-comprehensive-list"
                       data-toggle="list"
                       href="#list-comprehensive" role="tab" aria-controls="profile">综合性</a>
                    <a class="list-group-item list-group-item-action" id="list-economic-list" data-toggle="list"
                       href="#list-economic" role="tab" aria-controls="messages">经济类</a>
                    <a class="list-group-item list-group-item-action" id="list-management-list" data-toggle="list"
                       href="#list-management" role="tab" aria-controls="settings">工商管理</a>
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-history" role="tabpanel"
                             aria-labelledby="list-history-list">
                            <div class="row">
                                <ul class="list-inline">
                                    @for($i=0;$i<10;$i++)
                                        <li class="list-inline-item col-5 col-sm-4 col-md-2 text-center">
                                            <div>
                                                <img class="img-thumbnail rounded"
                                                     src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg">
                                            </div>
                                            <div>
                                                编程爱好者
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-comprehensive" role="tabpanel"
                             aria-labelledby="list-comprehensive-list">
                            <div class="row">
                                <ul class="list-inline">
                                    @for($i=0;$i<10;$i++)
                                        <li class="list-inline-item col-5 col-sm-4 col-md-2 text-center">
                                            <div>
                                                <img class="img-thumbnail rounded"
                                                     src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg">
                                            </div>
                                            <div>
                                                交际舞
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-economic" role="tabpanel"
                             aria-labelledby="list-economic-list">
                            <div class="row">
                                <ul class="list-inline">
                                    @for($i=0;$i<10;$i++)
                                        <li class="list-inline-item col-5 col-sm-4 col-md-2 text-center">
                                            <div>
                                                <img class="img-thumbnail rounded"
                                                     src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg">
                                            </div>
                                            <div>
                                                机器人爱好者
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-management" role="tabpanel"
                             aria-labelledby="list-management-list">
                            <div class="row">
                                <ul class="list-inline">
                                    @for($i=0;$i<10;$i++)
                                        <li class="list-inline-item col-5 col-sm-4 col-md-2 text-center">
                                            <div>
                                                <img class="img-thumbnail rounded"
                                                     src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg">
                                            </div>
                                            <div>
                                                旅游爱好者
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 text-primary mt-1">
            高校热门<a class="float-right" href="/club">更多>></a>
        </div>
        <div class="row">
            @for($i=0;$i<6;$i++)
                <div class="row">
                    <div class="media mb-2">
                        <img class="align-self-center mr-2 col-2 rounded"
                             src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg"
                             alt="社团动态">
                        <div class="media-body">
                            <h5 class="mt-0">
                                <a href="#" class="text-dark">轮滑表演</a>
                            </h5>
                            <p>轮滑社团于晚上在钟楼广场进行表演，欢迎大家光临！轮滑社团于晚上在钟楼广场进行表演，欢迎大家光临！</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                <span class="ml-2 small">
                                    <a class="mr-2" href="#">轮滑社团</a>{{date('Y-m-d H:i:s')}}
                                </span>
                                </li>
                                <li class="list-inline-item"><i class="fa fa-heart"></i>10000</li>
                                <li class="list-inline-item"><i class="fa fa-eye"></i>10000</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection