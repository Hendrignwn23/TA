<?php

namespace App\Http\Controllers;
use App\Models\Struktur;

class StrukturController extends Controller
{
	function struktur(){
		$data['daftar_struktur'] = Struktur::all();
		return view('admin.Informasi.struktur',$data);
	}

	function simpan(){
		$struktur = new Struktur;
		$struktur->judul = request('judul');
		$struktur->handleUploadFile();
		$struktur->save();

		return redirect()->back()->with('success', 'File Berhasil Ditambahkan');

	}

	function hapus(Struktur $struktur){
		$struktur->delete();

		return redirect()->back()->with('danger', 'File Berhasil Dihapus');
	}
}