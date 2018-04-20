<?php

namespace App\Http\Controllers;

use App\College;
use App\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * GamesController constructor.
     */
    //public function __construct()
    //{
    //    $this->middleware('auth.back',[
    //        'except' => ['index','show'],
    //    ]);
    //}

    /**
     * Display a listing of the games.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::paginate(15);

        return view('games.index',compact('games'));
    }

    /**
     * Show the form for creating a new game.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created game in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'class' => 'required',
            'begins_at' => 'required',
        ]);

        $game = Game::create([
            'name' => $request->post('name'),
            'class' => $request->post('class'),
            'begins_at' => $request->post('begins_at'),
        ]);

        session()->flash('success','赛事创建成功');
        return redirect()->route('games.show',[$game]);
    }

    /**
     * Display the specified game.
     *
     * @param  \App\Game $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('games.show',compact('game'));
    }

    /**
     * Show the form for editing the specified game.
     *
     * @param  \App\Game $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        $colleges = College::all();
        return view('games.edit',compact('game','colleges'));
    }

    /**
     * Update the specified game in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $this->validate($request,[
            'name' => 'required',
            'class' => 'required',
        ]);

        $data = [];
        $data['name'] = $request->post('name');
        $data['class'] = $request->post('class');

        if ($request->begins_at)
        {
            $data['begins_at'] = $request->post('begins_at');
        }
        if ($request->golden)
        {
            $data['golden_id'] = $request->post('golden');
        }
        if ($request->silver)
        {
            $data['silver_id'] = $request->post('silver');
        }
        if ($request->bronze)
        {
            $data['bronze_id'] = $request->post('bronze');
        }
        if ($request->golden_name)
        {
            $data['golden_name'] = $request->post('golden_name');
        }
        if ($request->silver_name)
        {
            $data['silver_name'] = $request->post('silver_name');
        }
        if ($request->bronze_name)
        {
            $data['bronze_name'] = $request->post('bronze_name');
        }
        if ($request->golden_s)
        {
            $data['golden_s_id'] = $request->post('golden_s');
        }
        if ($request->silver_s)
        {
            $data['silver_s_id'] = $request->post('silver_s');
        }
        if ($request->bronze_s)
        {
            $data['bronze_s_id'] = $request->post('bronze_s');
        }
        if ($request->golden_name_s)
        {
            $data['golden_name_s'] = $request->post('golden_name_s');
        }
        if ($request->silver_name_s)
        {
            $data['silver_name_s'] = $request->post('silver_name_s');
        }
        if ($request->bronze_name_s)
        {
            $data['bronze_name_s'] = $request->post('bronze_name_s');
        }
        dd($data);
        $game->update($data);

        session()->flash('success','赛事更新成功');
        return redirect()->route('games.show',$game->id);
    }

    /**
     * Remove the specified game from storage.
     *
     * @param  \App\Game $game
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Game $game)
    {
        $game->delete();
        session()->flash('danger','赛事删除成功');
        return back();
    }
}
