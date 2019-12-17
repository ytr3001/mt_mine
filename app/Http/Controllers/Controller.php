<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        return view('auth/login');
    }

    // ログインユーザーのデータをviewに渡す。
    public function registerdone()
    {
        $auth = Auth::user();
        return view('auth/register_done', compact('auth'));
    }
}

