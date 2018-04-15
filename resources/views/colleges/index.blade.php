@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/college.css">
@stop

@section('content')
    <h1 id="title">后台书院管理</h1>
    <div class="col-md-offset-2 col-md-8">
        <a href="{{ route('colleges.create') }}" class="btn btn-primary nav_btn">新建书院</a>
       <div class="panel panel-default">
            <div class="panel-heading">
                <h5>所有书院</h5>
            </div>
            <div class="panel-body">
                    <div class="row">
                            <h5 class="col-md-3 col-sm-3">名称</h5>
                            <h5 class="col-md-3 col-sm-3">金牌数</h5>
                            <h5 class="col-md-3 col-sm-3">银牌数</h5>
                            <h5 class="col-md-3 col-sm-3">铜牌数</h5>
                    </div>
                    @foreach($colleges as $college)
                        <div class="row">
                                <a href="{{ route('colleges.show',$college->id) }}" class="col-md-3">{{ $college->name }}</a>
                                <h5 class="col-md-3 col-sm-3">{{ $college->golden->count() }}</h5>
                                <h5 class="col-md-3 col-sm-3">{{ $college->silver->count() }}</h5>
                                <h5 class="col-md-3 col-sm-3">{{ $college->bronze->count() }}</h5>
                        </div>
                    @endforeach
            </div>
       </div>
    </div>
@endsection