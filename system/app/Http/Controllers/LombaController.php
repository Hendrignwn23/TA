<?php

namespace App\Http\Controllers;

use App\Models\Lomba;

class LombaController extends Controller{
	function lomba(){
		$data['list_lomba'] = Lomba::all();
		return view('admin.Informasi.lomba',$data);
	}

	function simpan(){
		$lomba = new Lomba;
		$lomba->tanggal = request('tanggal');
		$lomba->nama_kegiatan = request('nama_kegiatan');
		$lomba->tingkat = request('tingkat');
		$lomba->penyelenggara = request('penyelenggara');
		$lomba->save();

		return redirect()->back()->with('success','Data berhasil di tambahkan');
	}

	function edit(Lomba $lomba){
		$lomba->tanggal = request('tanggal');
		$lomba->nama_kegiatan = request('nama_kegiatan');
		$lomba->tingkat = request('tingkat');
		$lomba->penyelenggara = request('penyelenggara');
		$lomba->update();

		return redirect()->back()->with('warning','Data berhasil di edit');
	}

	function hapus(Lomba $lomba){
		$lomba->delete();

		return redirect()->back()->with('danger','Data berhasil di hapus');
	}
}