<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Carbon\Carbon;

class BerandaController extends Controller
{

    function index(){
        $data['siswas'] = Siswa::all();
        for($i=Siswa::all()->min('tahun_masuk'); $i<=Carbon::now()->format('Y'); $i++){
            ${'siswa'.$i}=Siswa::where('tahun_masuk',$i)->count();
            $data['jumlah_siswa'][] = [
                'tahun_masuk' => $i,
                'jumlah' => ${'siswa'.$i},
            ];
            
        }
        return view('admin.beranda', $data);
    }

}
