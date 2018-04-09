<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','西安交通大学56届校运会')</title>
    <link rel="stylesheet" href="/css/app.css">
    @yield('resource')
</head>
<body>
@include('layouts._header')
<div class="container">
    <div class="col-md-12">
        @include('shared._message')
        @yield('content')
    </div>
</div>
<div class="col-md-12">
    @include('layouts._footer')
</div>
<script src="/js/app.js"></script>
</body>
</html>