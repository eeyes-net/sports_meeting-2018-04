@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/games.css">
@stop

@section('content')
    <h1 id="title">新建项目的页面</h1>

    <form action="{{ route('games.store') }}">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">项目名称</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" placeholder="请输入名字">
            </div>
        </div>
        <div class="form-group">
            <label for="begins_at" class="col-sm-2 control-label">开始时间</label>
            <div class="col-md-10">
                <input type="datetime-local" name="begins_at" class="form-control" id="begins_at">
            </div>
        </div>
        <div class="form-group">
            <label for="class" class="col-sm-2 control-label">田径赛</label>
            <div class="col-sm-10">
                <label class="radio-inline">
                    <input type="radio" name="track" id="option1" value="2">田赛
                </label>
                <label class="radio-inline">
                    <input type="radio" name="track" id="option2" value="1">径赛
                </label>
            </div>
        </div>
        <button type="submit" id="submit" class="btn btn-primary btn-lg center-block">提交</button>
    </form>
    
@endsection