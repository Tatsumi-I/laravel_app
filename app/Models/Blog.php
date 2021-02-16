<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // テーブル名
    protected $table = 'blogs';

    // 可変項目
    protected $fillable = 
    [
        'name',
        'content'
    ];
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
