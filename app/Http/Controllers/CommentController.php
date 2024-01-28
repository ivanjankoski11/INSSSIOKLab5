<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Store a newly created comment in the database.
    public function store(Request $request)
    {
        $request->validate([
            'blog_id' => 'required|exists:blogs,id',
            'content' => 'required',
        ]);

        Comment::create($request->all());

        return redirect()->back()
            ->with('success', 'Comment created successfully');
    }

    // Display the specified comment.
    public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }

    // Show the form for editing the specified comment.
    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    // Update the specified comment in the database.
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $comment->update($request->all());

        return redirect()->back()
            ->with('success', 'Comment updated successfully');
    }

    // Remove the specified comment from the database.
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back()
            ->with('success', 'Comment deleted successfully');
    }
}
