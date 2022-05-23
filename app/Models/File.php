<?php

namespace App\Models;

class File
{
    /**
     * ファイルを所有しているユーザーを取得
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
