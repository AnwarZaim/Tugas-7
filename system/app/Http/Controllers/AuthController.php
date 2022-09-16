<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller

{
    function showlogin()
    {
        return view('login');
    }

    function loginprocess()
    {
        if (FacadesAuth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('AdminBeranda')->with('success', 'Login Berhasil');
        } else {
            return back()->with('danger', 'Login Gagal,Silahkan cek email dan password anda');
        }
    }

    function logout()
    {
        FacadesAuth::logout();
        return redirect('Adminberanda');
    }

    function registration()
    {
    }

    function forgotpassword()
    {
    }
}
