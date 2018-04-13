@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/college.css">
@stop

@section('content')
    <a href="{{ route('colleges.index') }}" class="btn btn-primary back">返回</a>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>编辑{{ $college->name }}</h5>
        </div>
        <div class="panel-body">
            <form action="{{ route('colleges.update',$college->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="name">书院名称：</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $college->name }}">
                </div>
                <button type="submit" class="btn btn-primary">提交</button>
            </form>
        </div>
    </div>
@endsection