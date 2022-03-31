<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller {

    public function index() {
        return view('auth.login');
    }

    public function postLogin(Request $request) {
        $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Anda Telah Berhasil Login');
        }

        return redirect("login")->withSuccess('Ups! Anda telah memasukkan Email Dan Password yang tidak valid');
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
