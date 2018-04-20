<?php

namespace App\Http\Controllers;

use App\College;
use Illuminate\Http\Request;

class CollegesController extends Controller
{
    /**
     * CollegesController constructor.gi
     */
    //public function __construct()
    //{
    //    $this->middleware('auth.back',[
    //        'except' => ['index','show','json'],
    //    ]);
    //}

    /**
     * Display a listing of the colleges.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = College::all();

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
            'name' => $request->post('name'),
        ]);

        session()->flash('success','书院创建成功');
        return redirect()->route('colleges.show',[$college]);
    }

    /**
     * Display the specified college.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function show(College $college)
    {
        return view('colleges.show',compact('college'));
    }

    /**
     * Show the form for editing the specified college.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function edit(College $college)
    {
        return view('colleges.edit',compact('college'));
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
        $college->update($data);
        session()->flash('success','书院信息更新成功');
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
        session()->flash('danger','书院删除成功');
        return back();
    }

    public function json()
    {
        $colleges = College::with('golden','silver','bronze','golden_s','silver_s','bronze_s')->get();
        return response()->json([
            'code' => 200,
            'data' => $colleges,
        ]);
    }
}
