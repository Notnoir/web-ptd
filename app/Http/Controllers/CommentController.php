<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\BlogComment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function create()
    {
        Comment::create([
            'content' => request('message'),
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('about')->with('success_alert', 'Komentar berhasil ditambahkan');
    }

    public function reply()
    {
        Comment::create([
            'content' => request('message'),
            'user_id' => Auth::id(),
            'reply_to'=> request('reply')
        ]);

        return redirect()->route('about')->with('status', 'Komentar berhasil ditambahkan.');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back()->with('delete_alert', 'Komentar berhasil dihapus');
    }

    public function blog_create()
    {
        BlogComment::create([
            'content' => request('message'),
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('blog')->with('success_alert', 'Komentar berhasil ditambahkan');
    }

    public function blog_reply()
    {
        BlogComment::create([
            'content' => request('message'),
            'user_id' => Auth::id(),
            'reply_to'=> request('reply')
        ]);

        return redirect()->route('blog')->with('status', 'Komentar berhasil ditambahkan.');
    }

    public function blog_destroy(BlogComment $comment)
    {
        $comment->delete();

        return back()->with('delete_alert', 'Komentar berhasil dihapus');
    }
}
