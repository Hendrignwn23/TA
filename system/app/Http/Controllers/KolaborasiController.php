<?php

namespace App\Http\Controllers;

use App\Models\Kolaborasi;

class KolaborasiController extends Controller{
	function kolaborasi(){
		$data['list_kolaborasi'] = Kolaborasi::all();
		return view('admin.Informasi.kolaborasi',$data);
	}

	function simpan(){
		$kolaborasi = new Kolaborasi;
		$kolaborasi->tanggal = request('tanggal');
		$kolaborasi->nama_kegiatan = request('nama_kegiatan');
		$kolaborasi->instansi_lembaga = request('instansi_lembaga');
		$kolaborasi->save();

		return redirect()->back()->with('success','Data berhasil di tambahkan');
	}

	function edit(Kolaborasi $kolaborasi){
		$kolaborasi->tanggal = request('tanggal');
		$kolaborasi->nama_kegiatan = request('nama_kegiatan');
		$kolaborasi->instansi_lembaga = request('instansi_lembaga');
		$kolaborasi->update();

		return redirect()->back()->with('warning','Data berhasil di edit');
	}

	function hapus(Kolaborasi $kolaborasi){
		$kolaborasi->delete();

		return redirect()->back()->with('danger','Data berhasil di hapus');
	}
}