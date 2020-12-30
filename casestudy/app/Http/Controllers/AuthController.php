<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    function showFormLogin()
    {
        return view('admin.layout.login');
    }

    function login(Request $request) {
        $credentials = $request->only('user_name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            $message = "Login Fail, Please Try Again!";
            return redirect()->route('login')->with('error',$message);
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
