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
        $posts = Post::where('user_id', $user->id)->get();
        return view('user.index',compact('user', 'posts'));
    }
    public function add() {
        return view('user.add');
    }
    public function create(Request $request) {
        $this->validate($request, User::$create_rules);
        $user = new User;
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return redirect('/user/add');
    }
    public function edit() {
        $user = Auth::user();
        return view('user.edit',compact('user'));
    }
    public function update(Request $request) {
        $this->validate($request, User::$edit_rules);
        $user = User::find($request->id);
        if(!empty($request->picture)) {
            $originalImg = $request->picture;
            $filePath = $originalImg->store('public');
            $user->picture = str_replace('public/', '', $filePath);
        } else {
            $user->picture = $request->picture2;
        }
        $user->name = $request->name;
        $user->introduction = $request->introduction;
        $user->save();
        return redirect('/user/index');
    }
}
