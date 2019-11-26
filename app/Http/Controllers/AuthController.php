<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function getAuth() {
        $msg = 'ログインしてください。';
        return view('auth.login', ['message' => $msg]);
    }
    public function postAuth(Request $request) {
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' =>$password])) {
            return redirect('/post/index');
            $msg = 'ログインしました。';
        }  else {
            $msg = 'ログインに失敗しました。';
        }
        return view('auth.login', ['message' => $msg]);
    }
}
