<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin', $admin->id);
            return redirect()->route('auth.dashboard');
        } else {
            return back()->with('error', 'Username atau password salah!');
        }
    }

    public function logout()
    {
        Session::forget('admin');
        return redirect()->route('auth.login')->with('success', 'Berhasil logout!');
    }

    public function dashboard()
    {
        if (!Session::has('admin')) {
            return redirect()->route('auth.login')->with('error', 'Silakan login dulu!');
        }

        return view('auth.dashboard');
    }
}
