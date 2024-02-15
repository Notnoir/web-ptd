<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Comment;

class CommentController extends Controller
{
    public function store(Request $request) {
        $this->validate($request,[
            'context'=>'required|custom:komentar tidak dapat di muat'
        ]);

        Comment::create([
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('users.index')->with('status', 'User berhasil ditambahkan.');
    }

    // public function update(Request $request,$id) {
    //     $data = Comment::find($id);

    //     $this->validate($request,[
    //         'context'=>'required|custom:komentar tidak dapat di muat'
    //     ]);
    //     $data->content = $request->content;
    //     $data->save;

    //     return redirect()->route('users.index')->with('status', 'Komentar berhasil diubah.');
    // }
}
