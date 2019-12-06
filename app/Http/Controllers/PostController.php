<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;

class PostController extends Controller
{
    // ログインユーザーのデータとidを降順で投稿データを12個ごとviewに渡す
    public function index() {
        $auth = Auth::user();
        $posts = Post::orderby('id','desc')->paginate(12);
        return view('post.index',compact('posts', 'auth'));
    }
    // ログインユーザーのデータをviewに渡す
    public function create() {
        $auth = Auth::user();
        return view('post.create',compact('auth'));
    }
    // storeメソッドで一意のfilePathをpublicディレクトリに保存。str_replaceメソッドで'public/'を空白に置き換え。各投稿データをDBに保存。
    public function  store(Request $request) {
        $this->validate($request, Post::$rules);
        $post = new Post;
        $originalImg = $request->picture;
        $filePath = $originalImg->store('public');
        $post->picture = str_replace('public/', '', $filePath);
        $post->title = $request->title;
        $post->user_id = $request->user_id;
        $post->save();
        return redirect('/user/profile');
        }
    // リクエストされたidと一致する投稿データを取得。投稿内容、投稿ユーザー、ログインユーザーのデータをviewに渡す。
    public function show(Request $request) {
        $post = Post::where('id', $request->id)->first();
        $date = date_format($post->created_at, 'Y-m-d');
        $time = date_format($post->created_at, 'H:i');
        $user = User::where('id', $post->user_id)->first();
        $auth = Auth::user();
        return view('post.show',compact('post', 'date', 'time','user', 'auth'));
    }
    
    // リクエストされたidと一致する投稿データを消去。リクエストno==0なら投稿一覧画面へno==1ならユーザープロフィール画面へリダイレクト
    public function delete(Request $request) {
        $post = Post::find($request->id)->delete();
        if($request->no == 0) { 
            return redirect('/post/index');
        } elseif($request->no == 1) {
            return redirect('/user/profile');
        }
    }
}
