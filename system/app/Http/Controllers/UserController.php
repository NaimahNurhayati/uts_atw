<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\UserDetail;

class UserController extends Controller
{
  function index()
  {
    $data['list_user'] = user::withCount('artikel')->get();
    return view('user.index', $data);
  }

  function create()
  {
    return view('user.create');
  }

  function store()
  {
    $user = new user;
    $user->username = request('username');
    $user->nama = request('nama');
    $user->password = bcrypt(request('password'));
    $user->save();

    $userDetail = new Userdetail;
    $userDetail->id_user = $user->id;
    $userDetail->email = request('email');
    $userDetail->save();

    return redirect('user')->with('success', 'Data Berhasil Ditambahkan');
  }

  function show(user $user)
  {
    $data['user'] = $user;
    return view('user.show', $data);
  }

  function edit(user $user)
  {
    $data['user'] = $user;
    return view('user.edit', $data);
  }

  function update(user $user)
  {
    $user->username = request('username');
    $user->nama = request('nama');
    if (request('password'))  $user->password = request('password');
    $user->save();

    return redirect('user')->with('warning', 'Data Berhasil Diedit');
  }

  function destroy(user $user)
  {
    $user->delete();

    return redirect('user')->with('danger', 'Data Berhasil Dihapus');
  }
}
