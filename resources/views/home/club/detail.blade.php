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
    <div class="row mt-2">
        <div class="media mb-2">
            <img class="align-self-center mr-2 col-2 rounded"
                 src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg"
                 alt="社团动态">
            <div class="media-body">
                <div class="row">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h5 class="text-lg-center d-inline mr-5">莘莘团</h5>
                        </li>
                        <li class="list-inline-item small">关注：10000</li>
                        <li class="list-inline-item small">成员：10000</li>
                    </ul>
                    <button class="btn btn-primary ml-5"><i class="fa fa-plus mr-2"></i>关注</button>
                    <button class="btn btn-outline-primary ml-5"><i class="fa fa-check mr-2"></i>已经关注</button>
                </div>

                <p class="text-truncate">明德、求是、拓新、笃行</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="#">最新</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">精华</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">全部</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-9">
            @for($i=0;$i<16;$i++)
                <div class="row">
                    <div class="media mb-2">
                        <img class="align-self-center mr-2 col-3 rounded"
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
                                    <a class="mr-2" href="/club/detail">轮滑社团</a>{{date('Y-m-d H:i:s')}}
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
        <div class="col-3">
            <div class="card mb-1">
                <div class="card mb-1">
                    <div class="card-header">管理员</div>
                    <ul class="list-group">
                        @for($i=0;$i<4;$i++)
                            <li class="list-group-item">
                                <a href="#">
                                    <img class="rounded-circle col-4"
                                         src="https://upload.jianshu.io/users/upload_avatars/8319616/ac6c5db1-cb1c-4ad6-a88f-4e61dde78718.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96">
                                    寒云
                                </a>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="card mb-1">
                <div class="card mb-1">
                    <div class="card-header">名人榜</div>
                    <ul class="list-group">
                        @for($i=0;$i<4;$i++)
                            <li class="list-group-item">
                                <a href="#">
                                    <img class="rounded-circle col-4"
                                         src="https://upload.jianshu.io/users/upload_avatars/8319616/ac6c5db1-cb1c-4ad6-a88f-4e61dde78718.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96">
                                    寒云
                                </a>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection