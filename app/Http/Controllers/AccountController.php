<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function login(Request $request)
    {
        return view('account.login');
    }

    public function register(Request $request)
    {
        return view('account.register');
    }

    public function logout(Request $request)
    {
        // 
    }

    public function profile(Request $request)
    {
        return view('account.profile');
    }
}
