@extends('layouts.layout')
@section('content')
    <div class="col-12 border-success mt-2">
        <div class="row">
            <div class="col-2">
                <div class="row">
                    <img class="align-self-center col-12 rounded"
                         src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg"
                         alt="社团动态">
                </div>
                <div class="row">
                    <div class="col-12">
                        轮滑社团
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="media-body">
                    <div class="row">
                        <a href="#" class="text-dark">轮滑表演</a>
                    </div>
                    <div class="row">
                        轮滑社团于周五晚上在钟楼广场举行轮哈表演，欢迎大家踊跃参与！
                        轮滑社团于周五晚上在钟楼广场举行轮哈表演，欢迎大家踊跃参与！
                        轮滑社团于周五晚上在钟楼广场举行轮哈表演，欢迎大家踊跃参与！
                    </div>
                    <div class="row">
                        2018-06-01 15:45
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <a href="#comment" class="btn btn-primary"><i class="fa fa-edit"></i>发表评论</a>
    </div>
    <hr>
    <div class="row">
        <div class="col-8">
            <div class="row">
                @for($i=0;$i<16;$i++)
                    <div class="col-12">
                        <div class="row  mt-2">
                            <div class="col-2">
                                <div class="row">
                                    <img class="align-self-center col-12 rounded"
                                         src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528551893864&di=d37656d1cd518477fd40c0b40454e03f&imgtype=0&src=http%3A%2F%2Fwww.ccutu.com%2Fupload%2Fimage%2F20170926%2F6364204577626002132488200.jpg"
                                         alt="社团动态">
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        hanyun
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="list-unstyled">
                                            <li>好友：100</li>
                                            <li>社团：10</li>
                                            <li>
                                                <span class="text-truncate">河南工业大学</span>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-10">
                                <div class="media-body">
                                    <div class="row">
                                        赞一个！赞一个！赞一个！赞一个！
                                        赞一个！赞一个！赞一个！赞一个！
                                        赞一个！赞一个！赞一个！赞一个！
                                        赞一个！赞一个！赞一个！赞一个！
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-12 text-right">
                                        2018-06-01 15:45<a href="#comment">评论</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12  justify-content-center ">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">上一页</a></li>
                    @for($i=0;$i<16;$i++)
                        <li class="page-item"><a class="page-link" href="#">{{$i+1}}</a></li>
                    @endfor
                    <li class="page-item"><a class="page-link" href="#">下一页</a></li>
                </ul>
            </div>
        </div>
    </div>
    <a name="comment"></a>
    <div class="row mt-2" style="overflow: hidden">
        <textarea id="container" name="content">
        </textarea>
    </div>
@endsection
@section('js')
    <!-- 配置文件 -->
    <script type="text/javascript" src="/UE/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/UE/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
@endsection