@extends('layouts.master')

@section('content')
    <div>
        <h1>{{ $news->title }}</h1>
        <h5>{{ $news->content }}</h5>
    </div>
@endsection