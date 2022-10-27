<?php

namespace App\Http\Controllers;
use App\Models\Sejarah;

class SejarahController extends Controller
{
	function sejarah(){
		$data['daftar_sejarah'] = Sejarah::all();
		return view('admin.Informasi.sejarah',$data);
	}

	function simpan(){
		$sejarah = new Sejarah;
		$sejarah->judul = request('judul');
		$sejarah->handleUploadFile();
		$sejarah->save();

		return redirect()->back()->with('success', 'File Berhasil Ditambahkan');

	}

	function hapus(Sejarah $sejarah){
		$sejarah->handleDeleteFile();
		$sejarah->delete();

		return redirect()->back()->with('danger', 'File Berhasil Dihapus');
	}
}