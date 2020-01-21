<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return('auth.admin-login');
    }

    public function login()
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email'=> $request->email, 'password' => $request->],$remember)) {
            return redirect()->intented(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));


    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()
    }
}
