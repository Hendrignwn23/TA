<?php

namespace App\Http\Controllers;

use App\Models\Kelas;

class KelasController extends Controller
{
    function index(){
        $data['daftar_kelas'] = Kelas::all();
        return view('admin.Kelas.index', $data);
    }

    function simpan(){
        $kelas = new Kelas;
        $kelas->kelas = request('kelas');
        $kelas->kode = request('kode');
        $kelas->save();

        return redirect('admin/ruang-kelas')->with('success','Data Kelas berhasil ditambahkan');
    }

    function edit(Kelas $kelas){
        $kelas->kode = request('kode');
        $kelas->kelas = request('kelas');
        $kelas->update();

        return redirect()->back()->with('warning', 'Data kelas berhasil di edit');
    }

    function hapus(Kelas $kelas){
        $kelas->delete();

        return redirect()->back()->with('danger', 'Data berhasil dihapus');
    }
}
