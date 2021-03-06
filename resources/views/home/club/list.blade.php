@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="row">
            <ul class="list-inline ml-5">
                <li class="list-inline-item"><a class="nav-link" href="/club/list">全部</a></li>
                @foreach($categories as $category)
                    <li class="list-inline-item"><a class="nav-link"
                                                    href="/club/list?id={{$category->id}}">{{$category->category_name}}</a>
                    </li>
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
                                 onclick="showDetail({{$club->id}})"
                                 alt="社团logo">
                            <div class="card-body">
                                <h6 class="card-title text-center text-truncate" onclick="showDetail({{$club->id}})">{{$club->club_name}}</h6>
                                <p class="card-text text-left text-truncate " data-toggle="tooltip" data-placement="top"
                                   title="{{$club->club_description}}">
                                    {{$club->club_description}}
                                </p>
                                <div class="row text-center">
                                    <div class="col-12">
                                        <ul class="list-inline">
                                            <li class="list-inline-item small">
                                                <span>关注：{{$club->favorite_number}}</span></li>
                                            <li class="list-inline-item small"><span>成员：{{$club->member_number}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-12">
                                        <button onclick="attention('{{$club->id}}',1)" class="btn btn-primary">关注</button>
                                        <button onclick="attention('{{$club->id}}',2)" class="btn btn-primary">加入</button>
                                    </div>
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
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="card mb-2">
                    <div class="card-header">我的关注</div>
                    <ul class="list-group">
                        <li class="list-group-item">好友：100<a href="/user/friend"
                                                             class="text-info float-right small">查看</a>
                        </li>
                        <li class="list-group-item">社团：{{$myClubNumber}}<a href="/user/club"
                                                                           class="text-info float-right small">查看</a>
                        </li>
                        <li class="list-group-item">高校：100<a href="/user/school"
                                                             class="text-info float-right small">查看</a>
                        </li>
                    </ul>
                </div>
                <div class="card mb-1">
                    <div class="card-header">管理的社团</div>
                    <ul class="list-group">
                        @foreach($clubMyManage as $value)
                            <li class="list-group-item">{{$value->club_name}} <a href="/club/edit?id={{$value->id}}"
                                                                                 class="text-info float-right small">管理</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <div class="card mb-1">
                    <div class="card-header">社团推荐</div>
                    <ul class="list-group">
                        @foreach($clubs as $value)
                            <li class="list-group-item">{{$value->club_name}} <a href="/club/edit?id={{$value->id}}"
                                                                                 class="text-info float-right small">查看</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-12 mb-2">
                    <a class="btn btn-primary text-white" href="/club/add"><i class="fa fa-plus pr-2"></i>新建社团</a>
                </div>
            </div>
        </div>
    </div>

    <div id="attention" class="modal fade bd-example-modal-sm border-success" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <h6 class="text-success text-center" id="msg">成功</h6>
            </div>
        </div>
    </div>
    {{csrf_field()}}
@endsection
@section('js')
    <script>
        function showDetail(id) {
            window.location.href = '/club/detail?id=' + id;
        }

        $('[data-toggle="tooltip"]').tooltip();

        function attention(id, status) {
            var _token = $('input[name=_token]').val();
            if (status == 1) {
                $('#msg').text('关注成功');
            } else {
                $('#msg').text('申请加入成功！等待管理员确认!');
            }
            $.ajax({
                url: '/club/attention',
                method: 'post',
                data: {id: id, status: status, _token: _token},
                type: 'json',
                success: function (data) {
                    $('#msg').text(data.msg);
                    if (data.status != 'failed') {
                        $('#attention').modal('toggle');
                        setTimeout(function () {
                            $('#attention').modal('hide')
                        }, 2000)
                    } else if (data.status == 'failed') {
                        window.location.href = '/login';
                    }
                }
            });
        }
    </script>
@endsection
