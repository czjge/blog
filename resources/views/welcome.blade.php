<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="@{{ csrf_token }}">
    <title>彩虹天空-czjge的博客</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<div id="app">

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">彩虹天空</a>
            <span class="navbar-text">左手代码右手诗</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">主页 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="backendDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            服务端
                        </a>
                        <div class="dropdown-menu" aria-labelledby="backendDropdownMenuLink">
                            <a class="dropdown-item" href="#/category/1">PHP</a>
                            <a class="dropdown-item" href="#/category/2">PYTHON</a>
                            <a class="dropdown-item" href="#/category/3">GO</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="frontendDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            前端
                        </a>
                        <div class="dropdown-menu" aria-labelledby="frontendDropdownMenuLink">
                            <a class="dropdown-item" href="#/category/4">JS/CSS</a>
                            <a class="dropdown-item" href="#/category/5">VUE</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#/category/6">SERVER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#/category/7">MYSQL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#/category/8">随笔</a>
                    </li>
                </ul>
            </div>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="请输入关键字" aria-label="Search" style="margin-top: 15px;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-top: 15px!important;">搜索</button>
            </form>
        </nav>
    </div>

    <div class="container main">
        <router-view></router-view>
    </div>

</div>
<style>
    .navbar-brand {
        font-weight: bold;
        font-size: 20px;
    }
    .navbar-text {
        font-size: 13px;
        margin-top: 4px;
        margin-right: 40px;
    }
</style>
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>