<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController
{
    public function store(Request $request)
    {
        // ファイルを保存
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('',$file_name);
        $comment = $request->input('comment');
        $user_id = Auth::id();
        $user = User::find($user_id);
        $user->files()->create([
            'user_id' => $user_id,
            'file_name' => $file_name,
            'comment' => $comment
        ]);
        return redirect()->route('home');
    }
}
