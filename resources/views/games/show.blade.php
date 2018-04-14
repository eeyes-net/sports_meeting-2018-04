@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/games.css">
@stop

@section('content')
    <a href="{{ route('games.index') }}" class="btn btn-primary nav_btn">返回</a>
    <button  class="btn btn-primary nav_btn" data-toggle="modal" data-target="#edit">编辑</button>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>{{ $game->name }}</h5>
        </div>
        <div class="panel-body">
            <div class="row">
                <h5 class="col-md-3">项目名称</h5>
                <h5 class="col-md-9">{{ $game->name }}</h5>
            </div>
            <div class="row">
                <h5 class="col-md-3">开始时间</h5>
                <h5 class="col-md-9">{{ $game->begins_at->diffForHumans() }}</h5>
            </div>
            <div class="row">
                <h5 class="col-md-3">类型</h5>
                <h5 class="col-md-9">
                    @if($game->class == 1)
                        径赛
                    @else
                        田赛
                    @endif
                </h5>
            </div>
            <div class="row">
                <h5 class="col-md-3">金牌</h5>
                <h5 class="col-md-9">
                    @if($game->golden_id)
                        {{ $game->golden->name }}{{ $game->golden_name   }}
                        @else
                        暂无数据
                    @endif
                </h5>
            </div>
            <div class="row">
                <h5 class="col-md-3">银牌</h5>
                <h5 class="col-md-9">
                    @if($game->silver_id )
                        {{ $game->silver->name }}{{ $game->silver_name }}
                        @else
                        暂无数据
                    @endif
                </h5>
            </div>
            <div class="row">
                <h5 class="col-md-3">铜牌</h5>
                <h5 class="col-md-9">
                    @if($game->bronze_id)
                        {{ $game->bronze->name }} {{ $game->bronze_name }}
                        @else
                        暂无数据
                    @endif
                </h5>
            </div>
        </div>
    </div>
@endsection