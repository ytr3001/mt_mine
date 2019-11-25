<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        return view('user.index');
    }
    public function add() {
        return view('user.add');
    }
    public function create(Request $request) {
        $this->validate($request, User::$rules);
        $user = new User;
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return redirect('/user/add');
    }
    public function edit() {
        return view('user.edit');
    }
    public function update() {
        return view('user.edit');
    }
}
