@extends('layouts.master')

@section('content')
    <div>
        <h1>{{ $news->title }}</h1>
        {!! $news->content !!}
    </div>
@endsection