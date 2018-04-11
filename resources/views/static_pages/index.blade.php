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
                        <!-- <div id="14morn" class="time-table-day morning m_14">
                        <h2 class="time-title">14日 上午 径赛</h2>
                        <div class="time-body">
                            {foreach ($games_14am_track as $game)}
                            <section class="time-table-section">
                                <p>项目：{$game->name|htmlentities}</p>
                                <p>开始时间：{$game->begin_time|strtotime|date="d日H:i",###|htmlentities}</p>
                                {if ($game->champion)}
                                <p>冠军：{$game->champion|htmlentities}</p>
                                {/if}
                            </section>
                            {/foreach}
                        </div> -->
                        <div id="14morn_tian" class="">
                            <img  src="/static/index/arrow.png" class="arrow">
                            <h2 class="time-title">14日 上午 田赛</h2>
                            <div class="time-body">
                                <section class="time-table-section">
                                    <img src="/static/index/dot.png" class="dot">
                                    <p>10:00 1000米跑步</p>
                                    <p>冠军：许志轩君</p>
                                </section>
                                <section class="time-table-section">
                                    <img src="/static/index/dot.png" class="dot">
                                    <p>10:00 1000米跑步</p>
                                    <p>冠军：许志轩君</p>
                                </section>
                                <section class="time-table-section">
                                    <img src="/static/index/dot.png" class="dot">
                                    <p>10:00 1000米跑步</p>
                                    <p>冠军：许志轩君</p>
                                </section>
                            </div>
                        </div>
                        <div id="14morn_jing" class="">
                            <img  src="/static/index/arrow.png" class="arrow">
                            <h2 class="time-title">14日 上午 径赛</h2>
                            <div class="time-body">
                                <section class="time-table-section">
                                    <img src="/static/index/dot.png" class="dot">
                                    <p>10:00 1000米跑步</p>
                                    <p>冠军：许志轩君</p>
                                </section>
                                <section class="time-table-section">
                                    <img src="/static/index/dot.png" class="dot">
                                    <p>10:00 1000米跑步</p>
                                    <p>冠军：许志轩君</p>
                                </section>
                                <section class="time-table-section">
                                    <img src="/static/index/dot.png" class="dot">
                                    <p>10:00 1000米跑步</p>
                                    <p>冠军：许志轩君</p>
                                </section>
                            </div>
                        </div>
                        <div id="14after_tian" class="">
                            <img  src="/static/index/arrow.png" class="arrow">
                            <h2 class="time-title">14日 下午 田赛</h2>
                            <div class="time-body">
                                <section class="time-table-section">
                                    <img src="/static/index/dot.png" class="dot">
                                    <p>10:00 1000米跑步</p>
                                    <p>冠军：许志轩君</p>
                                </section>
                                <section class="time-table-section">
                                    <img src="/static/index/dot.png" class="dot">
                                    <p>10:00 1000米跑步</p>
                                    <p>冠军：许志轩君</p>
                                </section>
                                <section class="time-table-section">
                                    <img src="/static/index/dot.png" class="dot">
                                    <p>10:00 1000米跑步</p>
                                    <p>冠军：许志轩君</p>
                                </section>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div id="day15" class="schedule-main hidden">
                        <div id="14after_tian" class="">
                            <img  src="/static/index/arrow.png" class="arrow">
                            <h2 class="time-title">15日 下午 田赛</h2>
                            <div class="time-body">
                                <section class="time-table-section">
                                    <img src="/static/index/dot.png" class="dot">
                                    <p>10:00 1000米跑步</p>
                                    <p>冠军：许志轩君</p>
                                </section>
                                <section class="time-table-section">
                                    <img src="/static/index/dot.png" class="dot">
                                    <p>10:00 1000米跑步</p>
                                    <p>冠军：许志轩君</p>
                                </section>
                                <section class="time-table-section">
                                    <img src="/static/index/dot.png" class="dot">
                                    <p>10:00 1000米跑步</p>
                                    <p>冠军：许志轩君</p>
                                </section>
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
                                    <td class="third-td">金牌榜（票数）</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>仲英书院</td>
                                    <td>99</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>励志书院</td>
                                    <td>9</td>
                                </tr>
                            </table>
                        </div>
                        <div id="vote-section" class="hidden">
                        <table>
                                <tr>
                                    <td class="fir-td">排名</td>
                                    <td class="sec-td">队伍名称</td>
                                    <td class="third-td">票数</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>仲英书院</td>
                                    <td>99</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>励志书院</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>励志书院</td>
                                    <td>9</td>
                                </tr>
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