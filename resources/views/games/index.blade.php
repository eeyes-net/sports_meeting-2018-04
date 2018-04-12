@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/games.css">
@stop

@section('content')
    <h1 id="title">后台项目管理</h1>
    <a href="{{ route('games.create') }}" class="btn btn-primary">新建项目</a>
    <div class="game-items">
    <!-- 这里返回项目数据 -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>项目列表</h5>
        </div>
        <div class="panel-body">
            <ul class="row">
                @foreach($games as $game)
                    <li>
                        <a href="{{ route('games.show',$game->id) }}">{{ $game->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        {!! $games->render() !!}
    </div>
    </div>
@endsection