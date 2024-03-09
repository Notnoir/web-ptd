<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

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

        return redirect()->route('about')->with('status', 'Komentar berhasil ditambahkan.');
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
}
