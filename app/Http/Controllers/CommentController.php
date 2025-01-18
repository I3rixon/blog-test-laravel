<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Post $post)
    {
        $request->validate(['content' => 'required']);
        $post->comments()->create($request->all());
        return redirect()->route('posts.show', $post);
    }
}
