@extends('layouts.layout')
@section('content')
    <div class="card">
        <div class="card-header">注册</div>

        <div class="card-body">

            <form>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">用户名：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="用户名" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">密码：</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="密码"
                               required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="confirm_password" class="col-sm-2 col-form-label">确认密码：</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                               placeholder="确认密码" required>
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
