<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $guarded = array('id');

    public static  $rules = array (
        'picture' => 'required|file|image|mimes:jpeg,png,jpg,gif' ,
        // 'title' => 'string'
    );
}