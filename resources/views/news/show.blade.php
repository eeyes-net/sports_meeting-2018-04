@extends('layouts.master')

@section('content')
    <a href="{{ route('news.index') }}" class="btn btn-primary">返回新闻页</a>
    <div>
        <h1>{{ $news->title }}</h1>
        {!! $news->content !!}
    </div>
@endsection