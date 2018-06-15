<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>
        @yield('title','莘莘')
    </title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/Validate/jquery.validate.min.js"></script>
    <script src="/js/Validate/messages_zh.min.js"></script>
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
            <ul class="navbar-nav mr-auto" style="display: flex">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="/">首页 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/school">高校</a>
                </li>
                <li class="nav-item">
                    <div class="btn-group text-white">
                        <a class="nav-link text-white" href="/club">社团</a>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/club/list">社团列表</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/club">热议</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/club">问答</a>
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
                        <form method="post" action="/logout">
                            {{csrf_field()}}
                            <button class="dropdown-item" type="submit">
                                退出
                            </button>
                        </form>
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
<div class="row bg-dark text-white text-left">
    <footer class="container mt-5">
        <div class="row">
            <div class="col-4">
                <h6>关于我们</h6>
                <ul class="list-unstyled">
                    <li>团队介绍</li>
                    <li>产品介绍</li>
                    <li>创意来源</li>
                </ul>
            </div>
            <div class="col-4">
                <h6>联系我们</h6>
                <ul class="list-unstyled">
                    <li>电话：15701308875</li>
                    <li>邮箱：1355081829@qq.com</li>
                </ul>
            </div>
            <div class="col-4">
                <h6>加入我们</h6>
                <ul class="list-unstyled">
                    <li>招贤纳士</li>
                    <li>赞助合作</li>
                </ul>
            </div>
        </div>
    </footer>
</div>
@yield('js')
</body>
</html>
