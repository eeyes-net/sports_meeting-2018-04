<?php

namespace App\Http\Controllers;

use App\Games;
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
        $games = Games::select('id','name','partner')->paginate(5);

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
            'partner' => 'required',
            'begins_at' => 'required',
        ]);

        $game = Games::create([
            'name' => $request->post('name'),
            'class' => $request->post('class'),
            'partner' => $request->post('partner'),
            'begins_at' => $request->post('begins_at'),
        ]);

        return redirect()->route('games.show',[$game]);
    }

    /**
     * Display the specified game.
     *
     * @param  \App\Games $game
     * @return \Illuminate\Http\Response
     */
    public function show(Games $game)
    {
        return view('games.show',compact('game'));
    }

    /**
     * Show the form for editing the specified game.
     *
     * @param  \App\Games $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Games $game)
    {
        return view('games.edit',compact('game'));
    }

    /**
     * Update the specified game in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Games $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Games $game)
    {
        $this->validate($request,[
            'name' => 'required',
            'class' => 'required',
            'partner' => 'required',
            'begins_at' => 'required',
        ]);

        $data = [];
        $data['name'] = $request->post('name');
        $data['class'] = $request->post('class');
        $data['partner'] = $request->post('partner');
        $data['begins_at'] = $request->post('begins_at');

        if ($request->has('champion'))
        {
            $data['champion'] = $request->post('champion');
        }

        $game->update($data);

        return redirect()->route('games.show',$game->id);
    }

    /**
     * Remove the specified game from storage.
     *
     * @param  \App\Games $game
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Games $game)
    {
        $game->delete();
        return back();
    }

    //TODO Set sesssion()->flash();
}
