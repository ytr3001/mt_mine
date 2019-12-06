<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // モデルと関連するテーブルの定義
    protected $table = 'posts';
    // idへ予期せぬデータの代入を防止
    protected $guarded = array('id');
    // 投稿に関するバリデーションのルール
    public static  $rules = array (
        'picture' => 'required|file|image|mimes:jpeg,png,jpg' ,
        'title' => 'max:30'
    );
}