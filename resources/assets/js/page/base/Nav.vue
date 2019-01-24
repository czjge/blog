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
    </div>
</template>

<script>
    export default {
        name: "Nav"
    }
</script>

<style scoped>

</style>