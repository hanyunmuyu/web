@extends('layouts.layout')
@section('content')
    <div class="row">

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