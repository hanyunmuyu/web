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
        <div class="col-10">
            <div class="row">
                @for($i=0;$i<16;$i++)
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top"
                                 src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg"
                                 alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title text-center">篮球协会</h5>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="row justify-content-center mt-2">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">上一页</a></li>
                    @for($i=0;$i<20;$i++)
                        <li class="page-item"><a class="page-link" href="#">{{$i+1}}</a></li>
                    @endfor
                    <li class="page-item"><a class="page-link" href="#">下一页</a></li>
                </ul>
            </div>
        </div>
        <div class="col-2">
            <h4 class="text-primary">我的社团</h4>
            <ul class="list-unstyled">
                <li><a href="#">计算机</a></li>
                <li><a href="#">计算机</a></li>
                <li><a href="#">计算机</a></li>
                <li><a href="#">计算机</a></li>
                <li><a href="#">计算机</a></li>
            </ul>
            <a class="btn btn-primary text-white" href="/club/add">新建社团</a>
        </div>
    </div>
@endsection