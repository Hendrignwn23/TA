<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;

class PrestasiController extends Controller
{
    function prestasi(){
        $data['list_prestasi'] = Prestasi::all();
        return view('admin.Informasi.prestasi', $data);
    }

    function simpan(){
        $prestasi = new Prestasi;
        $prestasi->nama_kegiatan = request('nama_kegiatan');
        $prestasi->prestasi_sekolah = request('prestasi_sekolah');
        $prestasi->tingkat = request('tingkat');
        $prestasi->penyelenggara = request('penyelenggara');
        $prestasi->save();

        return redirect('admin/prestasi')->with('success','Data Kelas berhasil ditambahkan');
    }

    function edit(Prestasi $prestasi){
        $prestasi->nama_kegiatan = request('nama_kegiatan');
        $prestasi->prestasi_sekolah = request('prestasi_sekolah');
        $prestasi->tingkat = request('tingkat');
        $prestasi->penyelenggara = request('penyelenggara');
        $prestasi->update();

        return redirect()->back()->with('warning', 'Data kelas berhasil di edit');
    }

    function hapus(Prestasi $prestasi){
        $prestasi->delete();

        return redirect()->back()->with('danger', 'Data berhasil dihapus');
    }
}
