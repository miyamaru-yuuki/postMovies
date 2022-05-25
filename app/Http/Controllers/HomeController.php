<?php

namespace App\Http\Controllers;

use App\Models\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $files = File::all();
        foreach ($files as $file) {
            $file->user = $file->user->name;
        }
        return view('home',['files' => $files]);
    }
}
