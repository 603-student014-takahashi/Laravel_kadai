<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        \Auth::user()->likeMessages()->attach($request->message_id);
        return back();
    }

    public function destroy(Request $request)
    {
        \Auth::user()->likeMessages()->detach($request->message_id);
        return back();
    }

    public function index()
    {
        $messages = \Auth::user()->likeMessages()->orderBy('created_at', 'desc')->paginate(20);
        return view('likes.index', ['messages' => $messages]);
    }
}
