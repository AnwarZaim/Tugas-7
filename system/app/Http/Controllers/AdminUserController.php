<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;

class AdminUserController extends Controller
{


    function index()
    {
        $data['list_user'] = User::withCount('produk')->get();
        return view('User.index', $data);
    }

    function create()
    {
        return view('User.create');
    }

    function store()
    {
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        $userDetail = new UserDetail;
        $userDetail->id_user = $user->id;
        $userDetail->no_handphone = request('no_handphone');
        $userDetail->save();

        return redirect('AdminUser')->with('success', 'Data Berhasil Di Tambahkan');
    }

    function show(User $user)
    {
        $data['user'] = $user;
        return view('user.show', $data);
    }

    function edit(User $user)
    {
        $data['user'] = $user;
        return view('User.edit', $data);
    }

    function update(User $user)
    {
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        if (request('password')) $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('AdminUser')->with('success', 'Data Berhasil Di Edit');
    }

    function destroy(User $user)
    {
        $user->delete();
        return redirect('AdminUser')->with('danger', 'Data Berhasil Di Hapus');
    }
}
