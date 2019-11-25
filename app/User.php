<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|between:8,16',
        'picture' => 'file|image|mimes:jpeg,png,jpg,gif' ,
        'introduction' => 'string|size:100'
    );
}