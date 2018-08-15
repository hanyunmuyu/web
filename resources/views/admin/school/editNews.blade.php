@extends('admin.layout.layout')
@section('content')
    <div class="row">
    </div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">编辑高校新闻</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="/admin/school/news/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{$news->id}}">
            <div class="card-body">
                <div class="form-group">
                    <label for=title>新闻标题</label>
                    <input type="text" class="form-control" id="title" name="title" required
                           value="{{$news->title}}"
                           placeholder="请输入高校名称">
                </div>
                <div class="form-group">
                    <label for="content">新闻内容</label>
                    <textarea class="form-control" name="content" id="content" rows="3"
                              required
                              placeholder="请输入对高校的描述">{{$news->content}}</textarea></div>
                <div class="form-group file">
                    <label>新闻插图</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input required type="file" class="custom-file-input" name="file[]">
                            <label class="custom-file-label" for="school_logo">选择新闻插图</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">上传</span>
                        </div>
                    </div>
                </div>
                <i class="fa fa-plus btn btn-primary" id="addMore">增加</i>
                <div class="form-group">
                    <label for="status">发布</label>
                    <input type="checkbox" id="status" name="status" @if($news->status==1) checked="checked" @endif>
                </div>
            </div>
        {{csrf_field()}}
        <!-- /.card-body -->
            <div class="card-footer justify-content-center">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </form>
    </div>

@endsection
@section('js')
    <script>
        var html = $('.file').html();
        $('#addMore').click(function () {
            if ($('input[type="file"]').length < 3) {
                $(this).before(html);
            }
        })
    </script>
@endsection