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
            <router-view name="nav"></router-view>
            <router-view name="search"></router-view>
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