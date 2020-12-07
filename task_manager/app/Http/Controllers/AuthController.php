<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    function showFormLogin()
    {
        return view('admin.login');
    }

    function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->push('login', true);
            return redirect()->route('admin.dashboard');
        } else {
            $message = "Login Fail, Please Try Again!";
            return redirect()->route('login')->with('error',$message);
        }
    }

    function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
