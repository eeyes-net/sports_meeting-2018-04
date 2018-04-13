@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/college.css">
@stop

@section('content')
    <a href="{{ route('colleges.index') }}" class="btn btn-primary back">返回</a>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>{{ $college->name }}</h5>
        </div>
        <div class="panel-body">
            <div class="row">
                <h5 class="col-md-3">书院名称</h5>
                <h5 class="col-md-9">{{ $college->name }}</h5>
            </div>
            <div class="row">
                <h5 class="col-md-3">金牌数</h5>
                <h5 class="col-md-9">{{ $college->golden()->count() }}</h5>
            </div>
            <div class="row">
                <h5 class="col-md-3">银牌数</h5>
                <h5 class="col-md-9">{{ $college->silver()->count() }}</h5>
            </div>
            <div class="row">
                <h5 class="col-md-3">铜牌数</h5>
                <h5 class="col-md-9">{{ $college->bronze()->count() }}</h5>
            </div>
            <div class="row">
                <a  class="btn btn-primary back" href="{{ route('colleges.edit',$college->id) }}">编辑</a>
            </div>
        </div>
    </div>
@endsection