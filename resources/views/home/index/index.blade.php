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
        <div class="row mt-1" id="list-tab" role="tablist">
            <div class="col-12">
                <ul class="list-inline" id="tab">
                    <li class="list-inline-item"><span class="btn btn-sm btn-primary">编程爱好者</span></li>
                    <li class="list-inline-item"><span class="btn btn-sm btn-outline-primary">编程爱好者</span></li>
                    <li class="list-inline-item"><span class="btn btn-sm btn-outline-primary">编程爱好者</span></li>
                    <li class="list-inline-item"><span class="btn btn-sm btn-outline-primary">编程爱好者</span></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="tabContent">
                    <div class="tab-pane fade show active" role="tabpanel"
                         aria-labelledby="list-home-list">
                        <div class="row">
                            <ul class="list-inline">
                                @for($i=0;$i<5;$i++)
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
                    <div class="tab-pane fade" role="tabpanel"
                         aria-labelledby="list-profile-list">
                        <div class="row">
                            <ul class="list-inline">
                                @for($i=0;$i<5;$i++)
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
                    <div class="tab-pane fade" role="tabpanel"
                         aria-labelledby="list-messages-list">
                        <div class="row">
                            <ul class="list-inline">
                                @for($i=0;$i<5;$i++)
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
                    <div class="tab-pane fade" role="tabpanel"
                         aria-labelledby="list-settings-list">
                        <div class="row">
                            <ul class="list-inline">
                                @for($i=0;$i<5;$i++)
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


        <div class="row mt-1" id="list-tab" role="tablist">
            <div class="col-12">
                <ul class="list-inline" id="tabSchool">
                    <li class="list-inline-item"><span class="btn btn-sm btn-primary">编程爱好者</span></li>
                    <li class="list-inline-item"><span class="btn btn-sm btn-outline-primary">编程爱好者</span></li>
                    <li class="list-inline-item"><span class="btn btn-sm btn-outline-primary">编程爱好者</span></li>
                    <li class="list-inline-item"><span class="btn btn-sm btn-outline-primary">编程爱好者</span></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="tabSchoolContent">
                    <div class="tab-pane fade show active"
                         aria-labelledby="list-home-list">
                        <div class="row">
                            <ul class="list-inline">
                                @for($i=0;$i<5;$i++)
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
                    <div class="tab-pane fade"
                         aria-labelledby="list-profile-list">
                        <div class="row">
                            <ul class="list-inline">
                                @for($i=0;$i<5;$i++)
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
                    <div class="tab-pane fade"
                         aria-labelledby="list-messages-list">
                        <div class="row">
                            <ul class="list-inline">
                                @for($i=0;$i<5;$i++)
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
                    <div class="tab-pane fade"
                         aria-labelledby="list-settings-list">
                        <div class="row">
                            <ul class="list-inline">
                                @for($i=0;$i<5;$i++)
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
@section('js')
    <script>
        $(function () {
            $('#tab>li').on('click', function (e) {
                e.preventDefault()
                // tabContent
                // alert()
                $(this).siblings().find('span').addClass('btn-outline-primary')
                $(this).find('span').removeClass('btn-outline-primary').addClass('btn-primary')
                $('#tabContent .tab-pane').removeClass('show').removeClass('active')
                $('#tabContent .tab-pane').eq($(this).index()).addClass('show').addClass('active')
            })
            $('#tabSchool>li').on('click', function (e) {
                e.preventDefault()
                // tabContent
                // alert()
                $(this).siblings().find('span').addClass('btn-outline-primary')
                $(this).find('span').removeClass('btn-outline-primary').addClass('btn-primary')
                $('#tabSchoolContent .tab-pane').removeClass('show').removeClass('active')
                $('#tabSchoolContent .tab-pane').eq($(this).index()).addClass('show').addClass('active')
            })
        })
    </script>
@endsection