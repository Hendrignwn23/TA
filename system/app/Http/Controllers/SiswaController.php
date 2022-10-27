<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Carbon\Carbon;

class SiswaController extends Controller
{

    function kelas1(){
        $data['list_kelas_all'] = Kelas::where('kelas',1)->get();
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',1)
        ->get();
        $data['list_kelas_edit'] = Kelas::where('kelas',1)->orWhere('kelas',2)->get();
        return view('admin.Siswa.index', $data);
    }

    function kelas2(){
        $data['list_kelas_all'] = Kelas::where('kelas',2)->get();
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',2)
        ->get(); 
        $data['list_kelas_edit'] = Kelas::where('kelas',2)->orWhere('kelas',3)->get();
        return view('admin.Siswa.index', $data);
    }

    function kelas3(){
        $data['list_kelas_all'] = Kelas::where('kelas',3)->get();
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',3)
        ->get(); 
        $data['list_kelas_edit'] = Kelas::where('kelas',3)->orWhere('kelas',4)->get();
        return view('admin.Siswa.index', $data);
    }

    function kelas4(){
        $data['list_kelas_all'] = Kelas::where('kelas',4)->get();
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',4)
        ->get(); 
        $data['list_kelas_edit'] = Kelas::where('kelas',4)->orWhere('kelas',5)->get();
        return view('admin.Siswa.index', $data);
    }

    function kelas5(){
        $data['list_kelas_all'] = Kelas::where('kelas',5)->get();
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',5)
        ->get(); 
        $data['list_kelas_edit'] = Kelas::where('kelas',5)->orWhere('kelas',6)->get();
        return view('admin.Siswa.index', $data);
    }

    function kelas6(){
        $data['list_kelas_all'] = Kelas::where('kelas',6)->get();
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',6)
        ->where('siswa.status','Aktif')
        ->get();
        $data['list_kelas_edit'] = Kelas::where('kelas',6)->get();
        return view('admin.Siswa.index', $data);
    }

    function simpan(){
        $siswa = new Siswa;
        $siswa->kelas_id = request('kelas_id');
        $siswa->nama_siswa = request('nama_siswa');
        $siswa->nisn = request('nisn');
        $siswa->alamat = request('alamat');
        $siswa->tempat_lahir = request('tempat_lahir');
        $siswa->tanggal_lahir = request('tanggal_lahir');
        $siswa->jenis_kelamin = request('jenis_kelamin');
        $siswa->agama = request('agama');
        $siswa->tahun_masuk = request('tahun_masuk');
        $siswa->status = request('status');
        $siswa->handleUploadFoto();
        $siswa->save();

        return redirect()->back()->with('success', 'Siswa berhasil ditambahkan');
    }

    function edit(Siswa $siswa){
        $siswa->kelas_id = request('kelas_id');
        $siswa->nama_siswa = request('nama_siswa');
        $siswa->nisn = request('nisn');
        $siswa->alamat = request('alamat');
        $siswa->tempat_lahir = request('tempat_lahir');
        $siswa->tanggal_lahir = request('tanggal_lahir');
        $siswa->jenis_kelamin = request('jenis_kelamin');
        $siswa->agama = request('agama');
        $siswa->status = request('status');
        $siswa->tahun_masuk = request('tahun_masuk');
        $siswa->tahun_lulus = request('tahun_lulus');
        $siswa->handleUploadFoto();
        $siswa->update();

        return redirect()->back()->with('warning', 'Data Siswa berhasil diedit');
    }

    function hapus(Siswa $siswa){
        $siswa->delete();

        return redirect()->back()->with('denger', 'Data siswa ini berhasil dihapus');
    }

    function alumni(){
        $data['list_alumni'] = Siswa::where('status', 'ALUMNI')->get();

        return view('Admin.Alumni.index', $data);
    }


}
