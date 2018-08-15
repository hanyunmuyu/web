@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <table class="table table-bordered table-hover table-responsive-sm">
            <tr>
                <th>id</th>
                <th>名称</th>
                <th>描述</th>
                <th>Logo</th>
                <th>所属院校</th>
                <th>所属分类</th>
                <td>关注人数</td>
                <td>成员人数</td>
                <th>申请时间</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            @foreach($clubList as $club)
                <tr>
                    <td>
                        {{$club->id}}
                    </td>
                    <td>
                        {{$club->club_name}}
                    </td>
                    <td>
                        {{$club->club_description}}
                    </td>
                    <td>
                        <img class="img-md" src="{{$club->club_logo}}">
                    </td>
                    <td>
                        {{$club->school_name}}
                    </td>
                    <td>
                        {{$club->category}}
                    </td>
                    <td>{{$club->favorite_number}}</td>
                    <td>{{$club->member_number}}</td>
                    <td>
                        {{$club->created_at}}
                    </td>
                    <td>
                        @if($club->status==0)
                            禁用
                        @elseif($club->status==1)
                            新申请
                        @elseif($club->status==2)
                            申请被驳回
                        @elseif($club->status==3)
                            正常
                        @else
                        @endif
                    </td>
                    <td>
                        @if($club->status==0)


                            <button class="btn btn-primary" data-id="{{$club->id}}" onclick="deal({{$club->id}},3)">
                                解禁
                            </button>
                        @elseif($club->status==1)

                            <button class="btn btn-primary" data-id="{{$club->id}}" onclick="deal({{$club->id}},3)">通过
                            </button>
                            <button class="btn btn-danger" data-id="{{$club->id}}" onclick="deal({{$club->id}},2)">驳回
                            </button>

                        @elseif($club->status==2)
                            <button class="btn btn-primary" data-id="{{$club->id}}" onclick="deal({{$club->id}},3)">通过
                            </button>
                        @elseif($club->status==3)
                            <button class="btn btn-danger" data-id="{{$club->id}}" onclick="deal({{$club->id}},0)">禁用
                            </button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{csrf_field()}}
    <div class="row justify-content-center">
        {!! $clubList->links() !!}
    </div>
@endsection
@section('js')
    <script>
        function deal(id, status) {
            var token = $('input[name="_token"]').val();
            $.ajax({
                method: 'post',
                url: '/admin/club/deal',
                data: {id: id, status: status, _token: token},
                success: function () {
                    window.location.reload()
                }
            })
        }
    </script>
@endsection