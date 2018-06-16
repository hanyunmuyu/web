@extends('layouts.layout')
@section('content')
    <div class="row mt-2">
        @include('home.user.left')
        <div class="col-10">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">实名认证</div>

                        <div class="card-body">

                            <form>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">真实姓名：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="true_name" name="true_name"
                                               placeholder="真实姓名"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">身份证号：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_card_number"
                                               name="id_card_number"
                                               placeholder="身份证号" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">学生证号：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="student_number"
                                               name="student_number"
                                               placeholder="学生证号"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">学生证（正）：</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" name="logo" class="custom-file-input" id="logo" required>
                                            <label class="custom-file-label" for="logo">学生证正面</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">学生证（反）：</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" name="logo" class="custom-file-input" id="logo" required>
                                            <label class="custom-file-label" for="logo">学生证反面</label>
                                        </div>
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
