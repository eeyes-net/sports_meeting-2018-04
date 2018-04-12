@extends('layouts.master')

@section('resource')
    <link rel="stylesheet" href="/css/index.css">
@stop

@section('content')
    <div class="main">
        <a href="#" class="btn btn-primary btn-lg center-block" style="width:60%;background:#0066cc;">进入直播</a>
        <section id="schedule" class="content">
            <div class="sec-top">
                <h2 class="title">赛程</h2>
            </div>
            <div class="sec-main">
                <div class="date">
                    <div id="d14" class="issue active left-half">14日</div>
                    <div id="d15" class="issue right-half">15日</div>
                </div>
                <div class="schedule-main">
                    <div id="day14" class="show">
                        <div id="14morn_tian" class="">
                            <img  src="/static/index/arrow.png" class="arrow">
                            <h2 class="time-title">20日 上午 田赛</h2>
                            <div class="time-body">
                                @foreach($games_20am_field as $game)
                                    <section class="time-table-section">
                                        <img src="/static/index/dot.png" class="dot">
                                        <p>{{$game->begins_at.'  '.$game->name}}</p>
                                        <p>冠军：  </p>
                                    </section>
                                @endforeach
                            </div>
                        </div>
                        <div id="14morn_jing" class="">
                            <img  src="/static/index/arrow.png" class="arrow">
                            <h2 class="time-title">20日 上午 径赛</h2>
                            <div class="time-body">
                                @foreach($games_20am_track as $game)
                                    <section class="time-table-section">
                                        <img src="/static/index/dot.png" class="dot">
                                        <p>{{$game->begins_at.'  '.$game->name}}</p>
                                        <p>冠军：  </p>
                                    </section>
                                @endforeach
                            </div>
                        </div>
                        <div id="14after_tian" class="">
                            <img  src="/static/index/arrow.png" class="arrow">
                            <h2 class="time-title">20日 下午 田赛</h2>
                            <div class="time-body">
                                @foreach($games_20pm_field as $game)
                                    <section class="time-table-section">
                                        <img src="/static/index/dot.png" class="dot">
                                        <p>{{$game->begins_at.'  '.$game->name}}</p>
                                        <p>冠军：  </p>
                                    </section>
                                @endforeach
                            </div>
                        </div>
                        <div id="14after_jing" class="">
                            <img  src="/static/index/arrow.png" class="arrow">
                            <h2 class="time-title">20日 下午 径赛</h2>
                            <div class="time-body">
                                @foreach($games_20pm_track as $game)
                                    <section class="time-table-section">
                                        <img src="/static/index/dot.png" class="dot">
                                        <p>{{$game->begins_at.'  '.$game->name}}</p>
                                        <p>冠军：  </p>
                                    </section>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    </div>
                    <div id="day15" class="schedule-main hidden">
                        <div id="14morn_tian" class="">
                            <img  src="/static/index/arrow.png" class="arrow">
                            <h2 class="time-title">21日 上午 田赛</h2>
                            <div class="time-body">
                                @foreach($games_21am_field as $game)
                                    <section class="time-table-section">
                                        <img src="/static/index/dot.png" class="dot">
                                        <p>{{$game->begins_at.'  '.$game->name}}</p>
                                        <p>冠军：  </p>
                                    </section>
                                @endforeach
                            </div>
                        </div>
                        <div id="14morn_jing" class="">
                            <img  src="/static/index/arrow.png" class="arrow">
                            <h2 class="time-title">21日 上午 径赛</h2>
                            <div class="time-body">
                                @foreach($games_21am_track as $game)
                                    <section class="time-table-section">
                                        <img src="/static/index/dot.png" class="dot">
                                        <p>{{$game->begins_at.'  '.$game->name}}</p>
                                        <p>冠军：  </p>
                                    </section>
                                @endforeach
                            </div>
                        </div>
                        <div id="14after_tian" class="">
                            <img  src="/static/index/arrow.png" class="arrow">
                            <h2 class="time-title">21日 下午 田赛</h2>
                            <div class="time-body">
                                @foreach($games_21pm_field as $game)
                                    <section class="time-table-section">
                                        <img src="/static/index/dot.png" class="dot">
                                        <p>{{$game->begins_at.'  '.$game->name}}</p>
                                        <p>冠军：  </p>
                                    </section>
                                @endforeach
                            </div>
                        </div>
                        <div id="14after_jing" class="">
                            <img  src="/static/index/arrow.png" class="arrow">
                            <h2 class="time-title">21日 下午 径赛</h2>
                            <div class="time-body">
                                @foreach($games_21pm_track as $game)
                                    <section class="time-table-section">
                                        <img src="/static/index/dot.png" class="dot">
                                        <p>{{$game->begins_at.'  '.$game->name}}</p>
                                        <p>冠军：  </p>
                                    </section>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
                <section id="news" class="content">
                    <div class="sec-top">
                        <h2 class="title"> <a href="{{ route('news.index') }}">新闻</a></h2>
                    </div>
                    <div class="sec-main">
                        <ul>
                            @foreach($news as $new)
                                <li id="news">
                                    <a href="{{ route('news.show',$new->id) }}">
                                        <h3>{{ $new->title }}</h3>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
                <section id="ranks" class="content">
                    <div class="sec-top">
                        <h2 class="title">排行榜</h2>
                    </div>
                    <div class="sec-main">
                        <div class="date">
                            <div id="modal-rank" class="issue active left-half">奖牌榜</div>
                            <div id="vote-rank" class="issue right-half">投票榜</div>
                        </div>
                        <div id="rank-section">
                            <table>
                                <tr>
                                    <td class="fir-td">排名</td>
                                    <td class="sec-td">队伍名称</td>
                                    <td class="third-td">金牌榜</td>
                                </tr>
                                @foreach($colleges as $college)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $college->name }}</td>
                                        <td>{{ $college->golden()->count() }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div id="vote-section" class="hidden">
                        <table>
                                <tr>
                                    <td class="fir-td">排名</td>
                                    <td class="sec-td">队伍名称</td>
                                    <td class="third-td">票数</td>
                                </tr>
                                @foreach($colleges as $college)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $college->name }}</td>
                                        <td>{{ $college->ballot()->count() }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/index.js"></script>
@stop