@extends('layouts.layout')
@section('content')
    <div class="card">
        <div class="card-header">注册</div>

        <div class="card-body">

            <form action="/register/register" method="post">
                {{csrf_field()}}
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">用户名：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" placeholder="用户名" required>
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
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="密码"
                               required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password_confirmation" class="col-sm-2 col-form-label">确认密码：</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="password_confirmation" name="password_confirmation"
                               placeholder="确认密码" required>
                        @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 text-center">
                        <button type="submit" class="btn btn-primary">注册</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
