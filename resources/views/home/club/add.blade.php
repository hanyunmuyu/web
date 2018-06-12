@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">新建社团</div>

            <div class="card-body">

                <form method="post" action="/club/save" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">社团名称：</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="club_name" placeholder="社团名称" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="info" class="col-sm-2 col-form-label">简介：</label>
                        <div class="col-sm-10">
                            <textarea id="info" name="club_description" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">类别：</label>
                        <div class="col-sm-10">
                            @foreach($categories as $category)
                                <div class="form-check form-check-inline">

                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="catagory[]"
                                                                                                 value="{{$category->id}}">
                                        {{$category->name}}
                                    </label>
                                </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="info" class="col-sm-2 col-form-label">徽标：</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">选择徽标</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 text-center">
                            <button type="submit" class="btn btn-primary">创建</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
