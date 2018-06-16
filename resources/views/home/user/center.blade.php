@extends('layouts.layout')
@section('content')
    <div class="row mt-2">
        @include('home.user.left')
        <div class="col-10">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">编辑个人资料</div>

                        <div class="card-body">

                            <form>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">用户名：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="用户名"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">性别：</label>
                                    <div class="col-sm-10">
                                        <label class="radio-inline col-2"><input type="radio" checked="checked"
                                                                                 name="gender" value="1">男</label>
                                        <label class="radio-inline col-2"><input type="radio" name="gender"
                                                                                 value="2">女</label>
                                        <label class="radio-inline col-2"><input type="radio" name="gender"
                                                                                 value="3">保密</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">电话：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="电话"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="school" class="col-sm-2 col-form-label">选择学校：</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="school">
                                            @for($i=1;$i<20;$i++)
                                                <option>高校{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 text-center">
                                        <button type="submit" class="btn btn-primary">保存</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
