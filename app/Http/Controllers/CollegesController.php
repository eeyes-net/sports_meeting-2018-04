<?php

namespace App\Http\Controllers;

use App\College;
use Illuminate\Http\Request;

class CollegesController extends Controller
{
    /**
     * Display a listing of the colleges.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = College::select('id','name')->get();

        return view('colleges.index',compact('colleges'));
    }

    /**
     * Show the form for creating a new college.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colleges.create');
    }

    /**
     * Store a newly created college in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        $college = College::create([
            'name' => 'name',
        ]);

        return redirect()->route('college.show',[$college]);
    }

    /**
     * Display the specified college.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function show(College $college)
    {
        return view('college.show',compact('college'));
    }

    /**
     * Show the form for editing the specified college.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function edit(College $college)
    {
        return view('college.edit',compact('college'));
    }

    /**
     * Update the specified college in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,College $college)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        $data = [];
        $data['name'] = $request->post('name');
        if ($request->has('medals'))
        {
            $data['medals'] = $request->post('medals');
        }

        return redirect()->route('colleges.show',$college->id);
    }

    /**
     * Remove the specified college from storage.
     *
     * @param  \App\College $college
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(College $college)
    {
        $college->delete();
        return back();
    }

    //TODO Set session()->flash()
}
