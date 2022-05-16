<?php

namespace App\Http\Controllers;
use App\Models\User;

class RoleController
{
    public function index()
    {
        $users = User::with('roles')->get();
        $karirole = '';
        foreach($users as $user){
            foreach($user->roles as $role){
                if($karirole == ''){
                    $karirole = $role->role;
                }else{
                    $karirole = $karirole. ',' .$role->role;
                }
            }
            $user->roles = $karirole;
            $karirole = '';
        }
        return view('role', ['users' => $users]);
    }
}
