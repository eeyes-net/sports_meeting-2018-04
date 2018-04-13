<?php

namespace App\Http\Controllers;

use App\College;
use App\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the games.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::select('id','name','class','begins_at')->paginate(15);

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
            'begins_at' => 'required',
        ]);

        $data = [];
        $data['name'] = $request->post('name');
        $data['class'] = $request->post('class');
        $data['begins_at'] = $request->post('begins_at');

        if ($request->has('golden'))
        {
            $data['golden_id'] = $request->post('golden');
        }
        if ($request->has('silver'))
        {
            $data['silver_id'] = $request->post('silver');
        }
        if ($request->has('bronze'))
        {
            $data['bronze_id'] = $request->post('bronze');
        }
        if ($request->has('golden_name'))
        {
            $data['golden_name'] = $request->post('golden_name');
        }
        if ($request->has('silver_name'))
        {
            $data['silver_name'] = $request->post('silver_name');
        }
        if ($request->has('bronze_name'))
        {
            $data['bronze_name'] = $request->post('bronze_name');
        }

        $game->update($data);

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
        return back();
    }

    //TODO Set sesssion()->flash();
}
