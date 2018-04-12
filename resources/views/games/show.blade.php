@extends('layouts.master')

@section('content')
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
                        {{ $game->golden()->name }}
                        @else
                        暂无数据
                    @endif
                </h5>
            </div>
            <div class="row">
                <h5 class="col-md-3">银牌</h5>
                <h5 class="col-md-9">
                    @if($game->silver_id )
                        {{ $game->silver()->name }}
                        @else
                        暂无数据
                    @endif
                </h5>
            </div>
            <div class="row">
                <h5 class="col-md-3">铜牌</h5>
                <h5 class="col-md-9">
                    @if($game->bronze_id)
                        {{ $game->bronze()->name }}
                        @else
                        暂无数据
                    @endif
                </h5>
            </div>
                <!--<a href="{{ route('games.edit',$game->id) }}" class="links">编辑</a>-->
        </div>
    </div>
@endsection