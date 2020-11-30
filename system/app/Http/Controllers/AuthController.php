<?php

namespace App\Http\Controllers;

use App\Models\user;
use Auth;

class AuthController extends Controller
{

  function showLogin()
  {
    return view('login');
  }

  function loginProcess()
  {
    if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
      return redirect('beranda')->with('success', 'Login Berhasil');
    } else {
      return back()->with('danger', 'Login gagal. Silahkan cek email dan password anda!');
    }
  }

  function logout()
  {
    Auth::logout();
    return redirect('template');
  }

  function showRegister()
  {
    return view('register');
  }

  function storeRegister()
  {
    $user = new user;
    $user->nama = request('nama');
    $user->username = request('username');
    $user->password = bcrypt(request('password'));
    $user->save();
    return redirect('login')->with('success', 'Register Berhasil, silahkan login');
  }

  function forgotPassword()
  {
  }
}
