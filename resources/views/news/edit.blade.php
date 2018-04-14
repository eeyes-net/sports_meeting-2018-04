@extends('layouts.master')

@section('content')
    <div class="col-offset-md-1 col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>修改新闻</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('news.update',$news->id) }}" method="post">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <lable for="title">标题：</lable>
                        <input type="text" name="title" class="form-control" value="{{ $news->title }}">
                    </div>

                    <div class="form-group">
                        <lable for="content">内容：</lable>
                        <input type="text" name="content" class="form-control" value="{{ $news->content }}">
                    </div>
                    <button type="submit" class="btn btn-primary">提交</button>
                </form>
            </div>
        </div>
    </div>
@endsection