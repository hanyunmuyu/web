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
                            <input type="text" class="form-control {{ $errors->has('club_name') ? ' is-invalid' : '' }}"
                                   value="{{old('club_name')}}" id="club_name" name="club_name" onblur="check()"
                                   placeholder="社团名称" required>
                            @if ($errors->has('club_name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('club_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="info" class="col-sm-2 col-form-label">简介：</label>
                        <div class="col-sm-10">
                            <textarea id="club_description"
                                      name="club_description"
                                      class="form-control {{ $errors->has('club_description') ? ' is-invalid' : '' }}" required>{{old('club_description')}}</textarea>
                            @if ($errors->has('club_description'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('club_description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">类别：</label>
                        <div class="col-sm-10">
                            @foreach($categories as $category)
                                <div class="form-check form-check-inline">

                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="category[]"
                                               value="{{$category->id}}">
                                        {{$category->category_name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="info" class="col-sm-2 col-form-label">徽标：</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" name="logo" class="custom-file-input" id="logo" required>
                                <label class="custom-file-label" for="logo">选择徽标</label>
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
