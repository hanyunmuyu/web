@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="row">
            <ul class="list-inline ml-5">
                <li class="list-inline-item"><a class="nav-link" href="#">体育</a></li>
                <li class="list-inline-item"><a class="nav-link" href="#">设计艺术</a></li>
                <li class="list-inline-item"><a class="nav-link" href="#">体育</a></li>
                <li class="list-inline-item"><a class="nav-link" href="#">体育</a></li>
                <li class="list-inline-item"><a class="nav-link" href="#">体育</a></li>
                <li class="list-inline-item"><a class="nav-link" href="#">体育</a></li>
                <li class="list-inline-item"><a class="nav-link" href="#">体育</a></li>
                <li class="list-inline-item"><a class="nav-link" href="#">体育</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="row">
                @for($i=0;$i<16;$i++)
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg"
                                 alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title text-center">篮球协会</h5>
                                <p class="card-text text-left small">
                                    篮球协会的口号是目的是增加大家之间的沟通交流
                                </p>
                                <div class="row">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">关注：1000</li>
                                        <li class="list-inline-item">成员：100</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="row justify-content-center mt-2">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">上一页</a></li>
                    @for($i=0;$i<16;$i++)
                        <li class="page-item"><a class="page-link" href="#">{{$i+1}}</a></li>
                    @endfor
                    <li class="page-item"><a class="page-link" href="#">下一页</a></li>
                </ul>
            </div>
        </div>
        <div class="col-3">
            <div class="card mb-2">
                <div class="card-header">我的关注</div>
                <ul class="list-group">
                    <li class="list-group-item">好友：100<a href="/user/friend" class="text-info float-right small">查看</a></li>
                    <li class="list-group-item">社团：100<a href="/user/club" class="text-info float-right small">查看</a></li>
                    <li class="list-group-item">高校：100<a href="/user/school" class="text-info float-right small">查看</a></li>
                </ul>
            </div>
            <div class="card mb-1">
                <div class="card-header">管理的社团</div>
                <ul class="list-group">
                    <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a></li>
                    <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a></li>
                    <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a></li>
                    <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a></li>
                    <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a></li>
                    <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-primary text-white" href="/club/add"><i class="fa fa-plus pr-2"></i>新建社团</a>
                </div>
            </div>
        </div>
    </div>
@endsection