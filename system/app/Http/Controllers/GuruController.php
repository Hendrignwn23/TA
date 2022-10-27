<?php

namespace App\Http\Controllers;

use App\Models\Guru;

class GuruController extends Controller{
	function index(){
		$data['list_guru'] = Guru::all();

		return view('admin.Guru.index', $data);
	}
	function simpan(){
		$guru = new Guru;
		$guru->nama_guru = request('nama_guru');
		$guru->nip = request('nip');
		$guru->nuptk = request('nuptk');
		$guru->pangkat = request('pangkat');
		$guru->golongan = request('golongan');
		$guru->alamat = request('alamat');
		$guru->email = request('email');
		$guru->jenis_kelamin = request('jenis_kelamin');
		$guru->handleUploadFoto();
		$guru->save();

		return redirect()->back()->with('succes','Data Guru berhasil ditambahkan');
	}

	function edit(Guru $guru){
		$guru->nama_guru = request ('nama_guru');
		$guru->nip = request ('nip');
		$guru->nuptk = request('nuptk');
		$guru->pangkat = request('pangkat');
		$guru->golongan =request('golongan');
		$guru->alamat = request ('alamat');
		$guru->email = request ('email');
		$guru->jenis_kelamin = request('jenis_kelamin');
		$guru->handleUploadFoto();
		$guru->update();

		return redirect()->back()->with('warning','Data Guru Berhasil di edit');
	}

	function hapus(Guru $guru){
		$guru->delete();

		return redirect()->back()->with('denger','Data berhasil dihapus');
	}
} 