@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/news.css">
@stop

@section('content')
    <a href="{{ route('news.index') }}" class="btn btn-primary">返回新闻页</a>
    <a href="{{ route('/') }}" class="btn btn-primary">返回主页</a>
    <div id="news_content">
        <h1>{{ $news->title }}</h1>
        {!! $news->content !!}
    </div>
@endsection