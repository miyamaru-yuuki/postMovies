<?php

namespace App\Policies;

use App\Models\User;
use App\Models\File;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 指定したファイルをユーザーが更新可能かを判定
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\File  $file
     * @return bool
     */
    public function update(User $user, File $file)
    {
        return $user->id === $file->user_id;
    }
}
