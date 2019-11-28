<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index() {
        $user = Auth::user();
        $posts = Post::orderby('id','desc')->paginate(12);
        return view('post.index',compact('posts', 'user'));
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
        return redirect('/user/profile');
        }

    public function show(Request $request) {
        $post = Post::where('id', $request->id)->first();
        $date = date_format($post->created_at, 'Y-m-d');
        $time = date_format($post->created_at, 'H:i');
        $user = User::where('id', $post->user_id)->first();
        $auth = Auth::user();
        return view('post.show',compact('post', 'date', 'time','user', 'auth'));
    }
    
    //Post必要ないかもviewの修正含めて確認
    public function delete(Request $request, Post $post) {
        $post = Post::find($request->id)->delete();
        if($request->no == 0) { 
            return redirect('/post/index');
        } elseif($request->no == 1) {
            return redirect('/user/profile');
        }
    }
}
