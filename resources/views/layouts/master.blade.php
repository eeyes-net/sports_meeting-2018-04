<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','西安交通大学56届校运会')</title>
    <meta name ="keywords" content=" 西安交通大学第五十六届运动会">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/common.css">
    @yield('resource')
</head>
<body>
@include('layouts._header')
<div class="container">
        @include('shared._message')
        @yield('content')
</div>
@include('layouts._footer')
<script src="/js/app.js"></script>
<script src="/js/common.js"></script>
@yield('script')
</body>
</html>