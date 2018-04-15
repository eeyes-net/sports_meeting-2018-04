@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/games.css">
@stop

@section('content')
    @include('shared._errors')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>编辑{{ $game->name }}</h5>
        </div>
        <div class="panel-body">
            <form method="post" action="{{ route('games.update',$game->id) }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group form-part">
                    <label for="name">项目名称</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $game->name }}">
                </div>
                <div class="form-group form-part">
                    <label for="begins_at">开始时间</label>
                    <input type="datetime-local" name="begins_at" class="form-control" id="begins_at" value="{{ $game->begins_at->toDateString().'T'.$game->begins_at->toTimeString() }}">
                </div>
                <div class="form-group form-part">
                    <label for="class" class="col-sm-2 control-label">田径赛</label>
                    <div class="col-sm-10">
                        @if($game->class == 1)
                            <label class="radio-inline">
                                <input type="radio" name="class" id="option1" value="2">田赛
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="class" id="option2" value="1" checked="checked">径赛
                            </label>
                        @else
                            <label class="radio-inline">
                                <input type="radio" name="class" id="option1" value="2" checked="checked">田赛
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="class" id="option2" value="1">径赛
                            </label>
                        @endif
                    </div>
                </div>
                <div class="form-group form-part">
                    <label for="golden_name">金牌获得者</label>
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="text" name="golden_name" class="form-control" id="golden_name">
                        </div>
                        <div class="col-lg-4">
                            <select name="golden" id="golden">
                                @foreach($colleges as $college)
                                    <option value="{{ $college->id }}">{{ $college->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group form-part">
                    <label for="silver_name">银牌获得者</label>
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="text" name="silver_name" class="form-control" id="silver_name">
                        </div>
                        <div class="col-sm-4">
                            <select name="silver" id="silver">
                                @foreach($colleges as $college)
                                    <option value="{{ $college->id }}">{{ $college->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group form-part">
                    <label for="bronze_name">铜牌获得者</label>
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="text" name="bronze_name" class="form-control" id="bronze_name">
                        </div>
                        <div class="col-sm-4">
                            <select name="bronze" id="bronze">
                                @foreach($colleges as $college)
                                    <option value="{{ $college->id }}">{{ $college->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group form-part">
                    <button type="submit" class="btn btn-primary center-block">保存</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        var time = '{{ $game->begins_at->toDateTimeString() }}';
        time =  time.toString();
        console.log(time)
        time.indexOf(10) = ":";
        console.log(time)
        
    </script>
@endsection