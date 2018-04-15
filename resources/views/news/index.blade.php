@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/news.css">
@stop

@section('content')
    @can('admin')
        <a href="{{ route('news.create') }}" class="btn btn-primary news-create">发布新闻</a>
    @endcan
    <h2 style="text-align:center;">新闻列表</h2>
    @foreach($news as $new)
        <div id="news">
            <a href="{{ route('news.show',$new->id) }}">
                <h5 class="news_title">{{ $new->title }}</h5>
            </a>
        </div>
    @endforeach
@endsection