@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <ul class="list-inline">
                <li class="list-inline-item"><a class="nav-link" href="/club">全部</a></li>
                <li class="list-inline-item"><a class="nav-link" href="/club">热门</a></li>
                <li class="list-inline-item"><a class="nav-link" href="/club">与我相关</a></li>
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
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="card mb-1">
                    <div class="card-header">关注的社团</div>
                    <ul class="list-group">
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                    </ul>
                </div>
                <div class="card mb-1">
                    <div class="card-header">管理的社团</div>
                    <ul class="list-group">
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                    </ul>
                </div>
            @else
                <div class="card mb-1">
                    <div class="card-header">社团推荐<i class="fa fa-refresh float-right" onclick="refresh()"></i></div>
                    <ul class="list-group">
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                        <li class="list-group-item">计算机 <a href="/club/edit" class="text-info float-right small">管理</a>
                        </li>
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-primary text-white" href="/club/add"><i class="fa fa-plus pr-2"></i>新建社团</a>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    function refresh() {
        window.location.reload();
    }
</script>