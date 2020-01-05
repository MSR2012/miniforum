<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MyTopicController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $topics = \App\Model\Topic::where('created_by', Auth::user()->id)->orderBy('id', 'desc')->get();

        return view('topics.index', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $categories = \App\Model\Category::all();
        return view('topics.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //return $request->all();

        $topic = new \App\Model\Topic();
        $topic->category_id = $request->get('category_id');
        $topic->created_by = Auth::user()->id;
        $topic->title = $request->get('title');
        $topic->content = $request->get('content');
        $topic->save();

        return redirect('my_topics')->with('successMessage', 'Topic created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $categories = \App\Model\Category::all();
        $topic = \App\Model\Topic::find($id);

        return view('topics.edit', compact('categories', 'topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //return $request->all();

        $topic = \App\Model\Topic::find($id);
        $topic->category_id = $request->get('category_id');
        $topic->title = $request->get('title');
        $topic->content = $request->get('content');
        if ($this->hasPermission($topic)) {
            $topic->save();
        }

        return redirect('my_topics')->with('successMessage', 'Topic updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $topic = \App\Model\Topic::find($id);
        if ($this->hasPermission($topic)) {
            $topic->delete();
        }
        return redirect('my_topics')->with('successMessage', 'Topic deleted successfully');
    }

    private function hasPermission($topic) {
        return $topic->created_by == Auth::user()->id;
    }

}
