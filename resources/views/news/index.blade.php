@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/news.css">
@stop

@section('content')
    <a href="{{ route('news.create') }}" class="btn btn-primary news-create">发布新闻</a>
    @foreach($news as $new)
        <div id="news">
            <a href="{{ route('news.show',$new->id) }}">
                <h5>{{ $new->title }}</h5>
            </a>
        </div>
    @endforeach
@endsection