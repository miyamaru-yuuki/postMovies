<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = array('id');
    /**
     * ファイルを所有しているユーザーを取得
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
