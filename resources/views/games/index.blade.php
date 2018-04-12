@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/games.css">
@stop

@section('content')
    <h1 id="title">后台项目管理</h1>
    <a href="{{ route('games.create') }}" class="btn btn-primary nav_btn">新建项目</a>
    <div class="game-items">
    <!-- 这里返回项目数据 -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>项目列表</h5>
        </div>
        <div class="panel-body">
            <table id="games-table">
                <tr>
                    <td>项目名称</td>
                    <td>开始时间</td>
                    <td>类型</td>
                    <td>金牌获得者</td>
                    <td>银牌获得者</td>
                    <td>铜牌获得者</td>
                </tr>
                @foreach($games as $game)
                <tr>
                    <td><a href="{{ route('games.show',$game->id) }}">{{ $game->name }}</a></td>
                    <td>{{ $game->begins_at->diffForHumans() }}</td>
                    <td>
                        @if($game->class == 1)
                            径赛
                        @else
                            田赛
                        @endif
                    </td>
                    <td>
                        @if($game->golden_id)
                            {{ $game->golden()->name }}
                            @else
                            暂无数据
                        @endif
                    </td>
                    <td>
                        @if($game->silver_id )
                            {{ $game->silver()->name }}
                            @else
                            暂无数据
                        @endif
                    </td>
                    <td>
                        @if($game->bronze_id)
                            {{ $game->bronze()->name }}
                            @else
                            暂无数据
                        @endif
                    </td>
                    <td>
                       <form action="{{ route('games.destroy',$game->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">删除</button>
                       </form>
                    </td>
                    <td>
                        <button class="btn btn-primary">编辑</button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div id="page">
            {!! $games->render() !!}
        </div>
    </div>
    </div>
@endsection