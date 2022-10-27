<?php

namespace App\Http\Controllers;
use Auth;
class AuthController extends Controller
{
	function showlogin(){
		return view('Client.login');
	}

	function loginprocess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request ('password')])){
			return redirect('admin/beranda')->with('success', 'Login Berhasil');
		}else{
			return redirect()->back()->with('denger', 'Login Gagal, Silahkan cek E-mail dan Password Anda');
		}
	}

	function logout(){
		Auth::logout();

		return view('Client.login');
	}
}