<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController
{
    public function store(Request $request)
    {
        // ファイルを保存
//        $file_name = $request->file('file')->getClientOriginalName();
//        $request->file('file')->storeAs('',$file_name);
//        $comment = $request->input('comment');
        $user = User::find(1);
        $user->files()->create([
            'user_id' => 1,
            'file_name' => 'testfile',
            'file_path' => 'test',
            'comment' => "test"
        ]);
    }
}
