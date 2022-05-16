<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * この役割に属するユーザー
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
