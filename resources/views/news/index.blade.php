@extends('layouts.master')

@section('content')
    @foreach($news as $new)
        <div>
            <a href="{{ route('news.show',$new->id) }}">
                <h5>{{ $new->title }}</h5>
            </a>
        </div>
    @endforeach
@endsection