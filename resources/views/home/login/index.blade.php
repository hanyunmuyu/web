@extends('layouts.layout')
@section('title')
    登录
@endsection
@section('content')
    <div class="card mt-1">
        <div class="card-header text-center">登录</div>

        <div class="card-body">

            <form method="post" action="/login/doLogin">
                {{csrf_field()}}
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">用户名：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                               id="name" name="name" value="{{ old('name') }}" placeholder="用户名" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">密码：</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                               id="password" name="password" placeholder="密码"
                               required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 text-center">
                        <button type="submit" class="btn btn-primary">登录</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection