<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    function index(){
        $data['daftar_user'] = User::all();
        return view('admin.User.index', $data);
    }

    function simpan(){
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect()->back()->with('success','Data berhasil ditambahkan');
    }

    function edit(User $user){
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        if(request('password')) $user->password = request('password');
        $user->update();

        return redirect()->back()->with('warning', 'Data berhasil di edit');
    }

    function hapus(User $user){
        $user->delete();

        return redirect()->back()->with('danger', 'Data berhasil dihapus');
    }
}
