<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LogoutController extends Controller
{    
    // ログアウトの実行
    public function getlogout() {
        Auth::logout();
        return redirect('/login');
    }
}
