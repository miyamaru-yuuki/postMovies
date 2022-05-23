<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('role.index', ['users' => $users]);
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);
        $roles = Role::all();
        return view('role.edit', ['roles' => $roles,'user' => $user]);
    }

    public function update(Request $request,$user_id)
    {
        $roles = $request->input('role');
        $user = User::find($user_id);
        $user->roles()->detach();
        $user->roles()->attach($roles);
        return redirect()->route('user_role.index');
    }
}
