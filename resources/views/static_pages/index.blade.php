@extends('layouts.master')

@section('content')
    <div class="title m-b-md">
        这里是主页
    </div>
    <div class="m-b-md links">
        <a href="{{ route('login') }}">
            点击登陆
        </a>
    </div>
@endsection