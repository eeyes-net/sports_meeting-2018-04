@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/games.css">
@stop

@section('content')
    <h1 id="title">新建项目的页面</h1>
    @include('shared._errors')
    <form action="{{ route('games.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">项目名称</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" placeholder="请输入名字">
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">日期</label>
            <div class="col-sm-10">
                <label class="radio-inline">
                    <input type="radio" name="date" id="option1" value="option1">14日
                </label>
                <label class="radio-inline">
                    <input type="radio" name="date" id="option2" value="option2">15日
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">开始时间</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="begins_at" placeholder="请输入名字">
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">田径赛</label>
            <div class="col-sm-10">
                <label class="radio-inline">
<<<<<<< HEAD
                    <input type="radio" name="track" id="option1" value="option1">田赛
                </label>
                <label class="radio-inline">
                    <input type="radio" name="track" id="option2" value="option2">径赛
=======
                    <input type="radio" name="class" id="option1" value="2">田赛
                </label>
                <label class="radio-inline">
                    <input type="radio" name="class" id="option2" value="1">径赛
>>>>>>> fac918f4504112014b95a18935b2f04dd171b348
                </label>
            </div>
        </div>
        <button type="submit" id="submit" class="btn btn-primary btn-lg center-block">提交</button>
    </form>
    
@endsection