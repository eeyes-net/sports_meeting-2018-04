@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/college.css">
@stop

@section('content')
    <a href="{{ route('colleges.index') }}" class="btn btn-primary back">返回</a>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>创建新书院</h5>
        </div>
        <div class="panel-body">
            <form action="{{ route('colleges.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">书院名称：</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <button type="submit" class="btn btn-primary">提交</button>
            </form>
        </div>
    </div>
@endsection