<?php

namespace App\Http\Controllers;
use App\Models\Visi_misi;

class Visi_misiController extends Controller
{
	function visi_misi(){
		$data['daftar_visi_misi'] = Visi_misi::all();
		return view('admin.Informasi.visi_misi',$data);
	}

	function simpan(){
		$visi_misi = new Visi_misi;
		$visi_misi->judul = request('judul');
		$visi_misi->handleUploadFile();
		$visi_misi->save();

		return redirect()->back()->with('success', 'File Berhasil Ditambahkan');

	}

	function hapus(Visi_misi $visi_misi){
		$visi_misi->delete();

		return redirect()->back()->with('danger', 'File Berhasil Dihapus');
	}
}