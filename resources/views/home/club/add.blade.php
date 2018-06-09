@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">新建社团</div>

            <div class="card-body">

                <form>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">社团名称：</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="社团名称" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="info" class="col-sm-2 col-form-label">简介：</label>
                        <div class="col-sm-10">
                            <textarea id="info" name="info" class="form-control" required></textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">类别：</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="catagory[]" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">体育</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="catagory[]"  value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">设计艺术</label>
                            </div>
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
