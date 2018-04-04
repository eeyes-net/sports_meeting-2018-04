<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

/**
 * Class NewsController
 * @package App\Http\Controllers
 */
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::select('id','content')->paginate(10);

        return view('news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:120',
            'content' => 'required',
        ]);

        $news = News::create([
            'title' => $request->post('title'),
            'content' => $request->post('content'),
        ]);

        return redirect()->route('news.show',$news->id);
    }

    /**
     * @param \App\News $news
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(News $news)
    {
        return view('news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $this->validate($request,[
            'title' => 'required|max:120',
            'content' => 'required',
        ]);

        $data['title'] = $request->post('title');
        if ($request->post('content'))
        {
            $data['content'] = $request->post('content');
        }

        $news->update($data);

        session()->flash('success','新闻更新成功');
        return view('news.show',compact('news'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(News $news)
    {
        $news->delete();
        session()->flash('success','新闻删除成功');
        return view('news.index');
    }
}
