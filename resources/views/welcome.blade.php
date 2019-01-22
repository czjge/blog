<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="@{{ csrf_token }}">
    <title>彩虹天空-czjge的博客</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">彩虹天空</a>
                <p class="navbar-text">左手代码右手诗</p>
            </div>
        </div>
    </nav>
    <div class="container main">
        <router-view><router-view />
    </div>
</div>
<style>
    .navbar-default .navbar-brand {
        font-weight: bold;
    }
</style>
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>