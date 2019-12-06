<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // モデルと関連するテーブルを定義
    protected $table = 'users';
    // idへ予期せぬデータの代入を防止
    protected $guarded = array('id');
    // ユーザーに関するバリデーションルール
    public static $rules = array (
        'name' => 'required|string|max:20',
        'picture' => 'file|image|mimes:jpeg,png,jpg' ,
        'introduction' => 'max:100'
    );
}

