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
//        foreach($roles as $data){
//            foreach($user->roles as $myRole){
//                if($data->id == $myRole->id){
//                    $data['selected'] = true;
//                }
//            }
//        }
        return view('role.edit', ['user_id' => $user_id,'roles' => $roles,'user' => $user]);
    }

    public function update(Request $request)
    {
        $user_id = $request->input('user_id');
        $roles = $request->input('role');
        $user = User::find($user_id);
        $user->roles()->detach();
        $user->roles()->attach($roles);
        return redirect('/index');
    }
}
