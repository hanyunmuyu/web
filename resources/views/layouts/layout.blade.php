<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>
        @yield('title','莘莘')
    </title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
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
            @if(Auth::check())
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                        寒云
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">个人中心</a>
                        <a class="dropdown-item" href="#">社团管理</a>
                        <a class="dropdown-item" href="#">消息中心</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">退出</a>
                    </div>
                </div>

            @else
                <a href="/register" class="btn text-white">注册</a>
                <a href="/login" class="btn text-white">登录</a>
            @endif
        </div>

    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
