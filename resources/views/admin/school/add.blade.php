@extends('admin.layout.layout')
@section('content')
    <div class="row">
    </div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">添加高校</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="/admin/school/create" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="school_name">高校名称</label>
                    <input type="text" class="form-control" id="school_name" name="school_name" required
                           placeholder="请输入高校名称">
                </div>
                <div class="form-group">
                    <label for="school_description">高校简介</label>
                    <textarea class="form-control" name="school_description" id="school_description" rows="3"
                              required
                              placeholder="请输入对高校的描述"></textarea></div>
                <div class="form-group">
                    <label for="file">高校logo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input required type="file" class="custom-file-input" id="file" name="file">
                            <label class="custom-file-label" for="school_logo">选择高校logo</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">上传</span>
                        </div>
                    </div>
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