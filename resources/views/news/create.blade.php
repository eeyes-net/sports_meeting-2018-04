@extends('layouts.master')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5> 创建新的新闻 </h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('news.store') }}" method="post">
                    @include('shared._errors')

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">标题：</label>
                        <input name="title" type="text" class="form-control" placeholder="标题">
                    </div>
                    <div class="form-group">
                        <label for="content">内容：</label>
                        <input name="content" type="text" class="form-control" placeholder="内容">
                    </div>

                    <button type="submit" class="btn btn-primary">提交</button>
                </form>
            </div>
        </div>
    </div>
@endsection