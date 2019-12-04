<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('user.delete',compact('user'));
    }

    public function show(Request $request) {
        if(is_null($request->id)) {
            $user = Auth::user();
        } else {
            $user = User::find($request->id);
        }
        $auth = Auth::user();
        $posts = Post::where('user_id', $user->id)->orderby('id', 'desc')->get();
        return view('user.profile',compact('user', 'posts', 'auth'));
    }

    public function edit() {
        $user = Auth::user();
        return view('user.edit',compact('user'));
    }
    
    public function update(Request $request) {
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

    public function delete(Request $request) {
        $auth = Auth::user();
        $user = User::where('id', $auth->id)->delete();
        $post = Post::where('user_id', $auth->id)->delete();
        return redirect('/post/index');
    }
}
