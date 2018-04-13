<?php

namespace App\Http\Controllers;

use App\Ballot;
use App\College;
use Illuminate\Http\Request;
use Faker\Generator as Faker;

class BallotController extends Controller
{
    /**
     * BallotController constructor.
     */
    public function __construct()
    {
        $this->middleware('throttle:1:1');
    }

    /**
     * @param Faker $faker
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Faker $faker)
    {
        $ballot = Ballot::create([
            'token' => $faker->uuid,
        ]);
        $colleges = College::all();
        return view('ballot.create',compact('ballot','colleges'));
    }

    /**
     * @param Ballot $ballot
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Ballot $ballot, Request $request)
    {
        $this->validate($request,[
            'college' => 'required',
            'token'   => 'required',
        ]);
        if ($request->post('token') !== $ballot->token)
        {
            abort('401','非法投票');
        }
        $ballot->college_id = $request->post('college');
        $ballot->save();
        session()->flash('success','投票成功');
        return redirect()->intended('/');
    }
}
