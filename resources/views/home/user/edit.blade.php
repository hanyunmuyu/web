<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>注册</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
<div class="row">
    <div class="container">

    </div>
</div>

<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">莘莘</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">首页 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/school">高校</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/club">社团</a>
                </li>
            </ul>
            <a href="/register" class="btn text-white">注册</a>
            <a href="/login" class="btn text-white">登录</a>
        </div>

    </div>
</nav>

<div class="container">
    <div class="card">
        <div class="card-header">完善用户信息</div>

        <div class="card-body">

            <form>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">真实姓名：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="真实姓名" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">性别：</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <label class="radio-inline col-1"><input type="radio" checked="checked" name="gender" value="1">男</label>
                            <label class="radio-inline col-1"><input type="radio" name="gender" value="2">女</label>
                            <label class="radio-inline col-1"><input type="radio" name="gender" value="3">保密</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">电话：</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="电话" required>
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
</body>
</html>