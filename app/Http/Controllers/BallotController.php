<?php

namespace App\Http\Controllers;

use App\Ballot;
use App\College;
use Illuminate\Http\Request;
use Faker\Generator as Faker;

class BallotController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:1:1');
    }

    public function create(Faker $faker)
    {
        $ballot = Ballot::create([
            'token' => $faker->uuid,
        ]);
        $colleges = College::all();
        return view('ballot.create',compact('ballot','colleges'));
    }

    public function store(Ballot $ballot,Request $request)
    {
        $this->validate($request,[
            'college' => 'required',
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
