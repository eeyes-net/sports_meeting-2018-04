@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/news.css">
@stop

@section('content')
    @foreach($news as $new)
        <div id="news">
            <a href="{{ route('news.show',$new->id) }}">
                <h5>{{ $new->title }}</h5>
            </a>
        </div>
    @endforeach
@endsection