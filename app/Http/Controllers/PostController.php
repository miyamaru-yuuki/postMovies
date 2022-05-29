<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController
{

    public function index()
    {
        $files = Auth::user()->files;
        return view('file.index',['files' => $files]);
    }

    public function store(Request $request)
    {
        // ファイルを保存
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public',$file_name);
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

    public function edit($file_id)
    {
        $file = File::find($file_id);
        if(Auth::user()->can('update', $file)){
            return view('file.edit', ['file' => $file]);
        }
        return redirect()->route('home');
    }

    public function update(Request $request,$file_id)
    {
        // ファイルを保存
        $file = File::find($file_id);
        if(Auth::user()->can('update', $file)) {
            $file_name = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public', $file_name);
            $comment = $request->input('comment');
            $file = File::find($file_id);
            $file->file_name = $file_name;
            $file->comment = $comment;
            $file->save();
            return redirect()->route('file.index');
        }
        return redirect()->route('home');
    }
}
