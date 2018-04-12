@extends('layouts.master')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <h1>所有书院</h1>
        <ul>
            <div class="row">
                <li>
                    <h5 class="col-md-3">名称</h5>
                    <h5 class="col-md-3">金牌数</h5>
                    <h5 class="col-md-3">银牌数</h5>
                    <h5 class="col-md-3">铜牌数</h5>
                </li>
            </div>
            @foreach($colleges as $college)
                <div class="row">
                    <li>
                        <a href="{{ route('colleges.show',$college->id) }}" class="col-md-3">{{ $college->name }}</a>
                        <h5 class="col-md-3">{{ $college->golden()->count() }}</h5>
                        <h5 class="col-md-3">{{ $college->silver()->count() }}</h5>
                        <h5 class="col-md-3">{{ $college->bronze()->count() }}</h5>
                    </li>
                </div>
            @endforeach
        </ul>
    </div>
@endsection