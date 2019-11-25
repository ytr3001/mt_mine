<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Auth;

class LoginController extends Controller
{
    public function getAuth() {
        return view('auth.login');
    }
    public function postAuth(Request $request) {
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' =>$password])) {
            return redirect('/post/index');
        } else {
            return redirect('/auth/login');
        }
    }
}
