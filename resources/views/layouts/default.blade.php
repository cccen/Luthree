<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','My three Test APP')</title>
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </head>
    <body>
    <div class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">My Three App</a>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
                <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    </body>
</html>