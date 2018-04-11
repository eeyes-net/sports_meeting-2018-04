<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\College;
use App\News;

class StaticPagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $college = College::select('id','name','medals')->get();
        $news = News::select('id','title')->orderBy('created_at','desc')->get();
        $games_20am_track = Game::where('begins_at','between',['2018-04-20 00:00:00','2018-04-20 11:59:59'])->where('class','1')->orderBy('begins_at','asc')->get();
        $games_20am_field = Game::where('begins_at','between',['2018-04-20 00:00:00','2018-04-20 11:59:59'])->where('class','2')->orderBy('begins_at','asc')->get();
        $games_20pm_track = Game::where('begins_at','between',['2018-04-20 12:00:00','2018-04-20 23:59:59'])->where('class','1')->orderBy('begins_at','asc')->get();
        $games_20pm_field = Game::where('begins_at','between',['2018-04-20 12:00:00','2018-04-20 23:59:59'])->where('class','2')->orderBy('begins_at','asc')->get();
        $games_21am_track = Game::where('begins_at','between',['2018-04-21 00:00:00','2018-04-21 11:59:59'])->where('class','1')->orderBy('begins_at','asc')->get();
        $games_21am_field = Game::where('begins_at','between',['2018-04-21 00:00:00','2018-04-21 11:59:59'])->where('class','2')->orderBy('begins_at','asc')->get();
        $games_21pm_track = Game::where('begins_at','between',['2018-04-21 12:00:00','2018-04-21 23:59:59'])->where('class','1')->orderBy('begins_at','asc')->get();
        $games_21pm_field = Game::where('begins_at','between',['2018-04-21 12:00:00','2018-04-21 23:59:59'])->where('class','2')->orderBy('begins_at','asc')->get();


        return view('static_pages.index',compact('college','news',
            'games_20am_track',
            'games_20am_field',
            'games_20pm_track',
            'games_20pm_field',
            'games_21am_track',
            'games_21am_field',
            'games_21pm_track',
            'games_21pm_field'
        ));
    }
}
