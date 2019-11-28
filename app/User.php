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

    protected $table = 'users';

    protected $guarded = array('id');

    public static $create_rules = array(
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|between:8,16',
    );
    
    public static $edit_rules = array (
        'name' => 'required|string',
        'picture' => 'file|image|mimes:jpeg,png,jpg,gif' ,
        // 'introduction' => 'string'
    );
}

