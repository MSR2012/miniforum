<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TopicController extends Controller {

    public function getTopics($category_id) {

        if ($category_id == 0) {
            $topics = \App\Model\Topic::with('category', 'createdBy')->orderBy('id', 'desc')->paginate($this->perPage);
        } else {
            $topics = \App\Model\Topic::with('category', 'createdBy')->where('category_id', $category_id)->orderBy('id', 'desc')->paginate($this->perPage);
        }

        return view('topics.list', compact('topics'));
    }

    public function viewTopic($topic_id) {

        $topic = \App\Model\Topic::with('category', 'createdBy')->find($topic_id);

        $replies = $topic->replies()->with('commentedBy')->orderBy('id', 'desc')->get();

        return view('topics.view', compact('topic', 'replies'));
    }

    public function postTopicReply(Request $request, $topic_id) {
        $reply = new \App\Model\Comment();
        $reply->commented_by = Auth::user()->id;
        $reply->topic_id = $topic_id;
        $reply->reply = $request->get('reply');
        $reply->save();

        return redirect('/topics/view/' . $topic_id)->with('Reply saved successfully');
    }

}
