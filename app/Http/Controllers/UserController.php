<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //リクエストされたidと一致するユーザーのデータを取得。リクエストユーザー、リクエストユーザーの投稿内容、ログインユーザーのデータをviewに渡す。
    //リクエストidがない場合は、ログインユーザーのデータを$userに格納。
    public function profile(Request $request) {
        if(is_null($request->id)) {
            $user = Auth::user();
        } else {
            $user = User::find($request->id);
        }
        $auth = Auth::user();
        $posts = Post::where('user_id', $user->id)->orderby('id', 'desc')->get();
        return view('user.profile',compact('user', 'posts', 'auth'));
    }
    // ログインユーザーのデータをviewに渡す。
    public function edit() {
        $auth = Auth::user();
        return view('user.edit',compact('auth'));
    }
    // storeメソッドで一意のfilePathをpublicディレクトリに保存。str_replaceメソッドで'public/'を空白に置き換え。各ユーザー編集データをDBに保存。
    public function update(Request $request, Post $post) {
        $this->validate($request, User::$rules);
        $user = User::find($request->id);
        if(!empty($request->picture)) {
            $originalImg = $request->picture;
            $filePath = $originalImg->store('public');
            $user->picture = str_replace('public/', '', $filePath);
        } else {
            $user->picture = $request->before_picture;
        }
        $user->name = $request->name;
        $user->introduction = $request->introduction;
        $user->save();
        return redirect('/user/profile');
    }
    // ログインユーザーのデータをviewに渡す。
    public function show() {
        $auth = Auth::user();
        return view('user.delete',compact('auth'));
    }
    // ログインユーザーのidと一致するユーザーと投稿を削除する。
    public function delete() {
        $auth = Auth::user();
        $user = User::where('id', $auth->id)->delete();
        $post = Post::where('user_id', $auth->id)->delete();
        return redirect('/top');
    }
}
