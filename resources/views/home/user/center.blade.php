@extends('layouts.layout')
@section('content')
    <div class="row mt-2">
        @include('home.user.left')
        <div class="col-10">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">完善资料</div>

                        <div class="card-body">

                            <form action="/user/update" method="post">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">昵称：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nick_name" name="nick_name"
                                               value="{{$user->nick_name}}"
                                               placeholder="昵称"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">性别：</label>
                                    <div class="col-sm-10">
                                        <label class="radio-inline col-2"><input type="radio"
                                                                                 @if($user->gender==1) checked="checked"
                                                                                 @endif
                                                                                 name="gender" value="1">男</label>
                                        <label class="radio-inline col-2"><input type="radio" name="gender"
                                                                                 @if($user->gender==2) checked="checked"
                                                                                 @endif
                                                                                 value="2">女</label>
                                        <label class="radio-inline col-2"><input type="radio" name="gender"
                                                                                 @if($user->gender==3) checked="checked"
                                                                                 @endif
                                                                                 value="3">保密</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="school" class="col-sm-2 col-form-label">选择学校：</label>
                                    <div class="col-sm-8">
                                        @if($user->school_id==0)
                                            <select class="form-control" id="school" name="school">
                                                <option>选择高校</option>
                                                @foreach($schoolList as $school)
                                                    <option value="{{$school->id}}"
                                                            @if($school->id==$school_id) selected @endif>{{$school->school_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="d-md-inline text-danger">不可修改</span>
                                        @else
                                            {{$school->school_name}}
                                        @endif
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
