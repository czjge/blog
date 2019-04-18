<template>
    <div>
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
                        <a class="dropdown-item" href="#/category/1">php</a>
                        <a class="dropdown-item" href="#/category/2">python</a>
                        <a class="dropdown-item" href="#/category/3">golang</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="frontendDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        前端
                    </a>
                    <div class="dropdown-menu" aria-labelledby="frontendDropdownMenuLink">
                        <a class="dropdown-item" href="#/category/4">js/css</a>
                        <a class="dropdown-item" href="#/category/5">vue</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="elseDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        其他
                    </a>
                    <div class="dropdown-menu" aria-labelledby="elseDropdownMenuLink">
                        <a class="dropdown-item" href="#/category/6">nginx</a>
                        <a class="dropdown-item" href="#/category/7">mysql</a>
                        <a class="dropdown-item" href="#/category/8">essay</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="selfDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        关于我
                    </a>
                    <div class="dropdown-menu" aria-labelledby="selfDropdownMenuLink">
                        <a class="dropdown-item" href="#/category/9">self-introduction</a>
                        <a class="dropdown-item" href="#/category/10">self-show</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Nav"
    }
</script>

<style scoped>

</style>