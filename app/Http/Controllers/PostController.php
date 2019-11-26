<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderby('id','desc')->get();
        return view('post.index',compact('posts'));
    }
    public function create() {
        $user = Auth::user();
        return view('post.create',compact('user'));
    }
    public function  store(Request $request, Post $post) {
        $this->validate($request, Post::$rules);
        $originalImg = $request->picture;
        $filePath = $originalImg->store('public');
        $post->picture = str_replace('public/', '', $filePath);
        $post->title = $request->title;
        $post->user_id = $request->user_id;
        $post->save();
        return redirect('/post/index');
        }
    public function show(Request $request) {
        $post = Post::where('id', $request->id)->first();
        $date = date_format($post->created_at, 'Y-m-d');
        $time = date_format($post->created_at, 'H:i');
        $user = User::where('id', $post->user_id)->first();
        return view('post.show',compact('post', 'date', 'time','user'));
    }
    public function delete(Request $request) {
        $post = Post::find($request->id)->delete();
        return redirect('/post/index');
    }
}
