<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class LoginController extends Controller
{
    public function loginForm()
    {
    	return view('admin/login_form');
    }

    public function login(Request $request)
    {
    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember_token'))) {
    		return redirect('admin/dashboard')->withSuccess('You are login successfully.');
        }
        return back()->withInput($request->only('email'))->withError('Email and password do not match with our records.');
    }

    public function logout()
    {
    	Auth::guard('admin')->logout();
        return redirect("admin/login")->withSuccess('You are logout successfully.');
    }
}
