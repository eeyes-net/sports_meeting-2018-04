@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/news.css">
@stop

@section('content')
    <h1 id="title-admin">后台管理页面</h1>
    <p class="center-text">欢迎您！管理员，欢迎来到第56届校运动会后台管理页面！</p>
    <section>
        <div class="jumbotron" style="background:#FAEBD7;">
            <div class="container">
                <h2>欢迎进入新闻管理页面！</h2>
                <p><a class="btn btn-primary btn-lg" role="button" href="{{ route('news.index') }}">
               点击进入</a>
                </p>
            </div>
        </div>
        <div class="jumbotron" style="background:#FAEBD7;">
                <div class="container">
                    <h2>欢迎进入书院管理页面！</h2>
                    <p><a class="btn btn-primary btn-lg" role="button" href="{{ route('colleges.index') }}">
                   点击进入</a>
                    </p>
                </div>
        </div>
        <div class="jumbotron" style="background:#FAEBD7;">
            <div class="container">
                <h2>欢迎进入运动项目页面！</h2>
                <p><a class="btn btn-primary btn-lg" role="button" href="{{ route('games.index') }}">
               点击进入</a>
                </p>
            </div>
        </div>
    </section>
@endsection