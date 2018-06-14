@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="row">
            <ul class="list-inline ml-5">
                <li class="list-inline-item"><a class="nav-link" href="/club/list">全部</a></li>
            @foreach($categories as $category)
                    <li class="list-inline-item"><a class="nav-link" href="/club/list?id={{$category->id}}">{{$category->category_name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="row">
                @foreach($clubList as $club)
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top"
                                 src="{{$club->club_logo}}"
                                 alt="Card image">
                            <div class="card-body">
                                <h6 class="card-title text-center">{{$club->club_name}}</h6>
                                <p class="card-text text-left small">
                                    {{$club->club_description}}
                                </p>
                                <div class="row">
                                    <ul class="list-inline">
                                        <li class="list-inline-item small">关注：1000</li>
                                        <li class="list-inline-item small">成员：100</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center mt-2">
                {{$clubList->links()}}
            </div>
        </div>
        <div class="col-3">
            <div class="card mb-2">
                <div class="card-header">我的关注</div>
                <ul class="list-group">
                    <li class="list-group-item">好友：100<a href="/user/friend" class="text-info float-right small">查看</a>
                    </li>
                    <li class="list-group-item">社团：100<a href="/user/club" class="text-info float-right small">查看</a>
                    </li>
                    <li class="list-group-item">高校：100<a href="/user/school" class="text-info float-right small">查看</a>
                    </li>
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
                <div class="col-12 mb-2">
                    <a class="btn btn-primary text-white" href="/club/add"><i class="fa fa-plus pr-2"></i>新建社团</a>
                </div>
            </div>
        </div>
    </div>
@endsection