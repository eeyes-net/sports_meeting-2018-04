@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/games.css">
@stop

@section('content')
    <h1 id="title">后台项目管理</h1>
    <a href="{{ route('games.create') }}" class="btn btn-primary">新建项目</a>
    <div class="game-items">
    <!-- 这里返回项目数据 -->
    @foreach($games as $game)
       
    @endforeach
    </div>
@endsection