@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <table class="table table-bordered table-hover">
            <tr>
                <th>id</th>
                <th>标题</th>
                <th>内容</th>
                <td>所属院校</td>
                <th>添加时间</th>
                <th>操作</th>
            </tr>
            @foreach($schoolNewsList as $news)
                <tr>
                    <td>
                        {{$news->id}}
                    </td>
                    <td>
                        {{$news->title}}
                    </td>
                    <td>
                        {{$news->content}}
                    </td>
                    <td>
                        {{$news->school_name}}
                    </td>
                    <td>
                        {{$news->created_at}}
                    </td>
                    <td>
                        <a class="btn btn-primary text-white" href="/admin/school/news/edit?id={{$news->id}}">编辑</a>
                        <button class="btn btn-danger" data-id="{{$news->id}}">删除</button>
                    </td>
                </tr>
            @endforeach
        </table>
        {{csrf_field()}}
    </div>
    <div class="row justify-content-center">
        {!! $schoolNewsList->links() !!}
    </div>
@endsection
@section('js')
    <script>
        $('.btn-danger').click(function () {
            var id = $(this).attr('data-id');
            var token = $('input[name="_token"]').val();
            $.ajax({
                method: 'post',
                url: '/admin/school/news/delete',
                data: {newsId: id, _token: token},
                success: function () {
                    window.location.reload();
                }
            })
        })
    </script>
@endsection