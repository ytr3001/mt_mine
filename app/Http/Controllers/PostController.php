<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('post.index');
    }
    public function create() {
        return view('post.create');
    }
    public function  store() {
        return view('post.index');
    }
    public function show() {
        return view('post.show');
    }
    public function delete() {
        return view('post.index');
    }
}
