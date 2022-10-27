<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Sejarah;
use App\Models\Struktur;
use App\Models\Visi_misi;
use App\Models\Prestasi;
use App\models\Kolaborasi;
use App\models\Lomba;
use App\models\Guru;

class HomeController extends Controller
{
    function showBeranda(){  
        $data['jumlah_siswa'] = Siswa::where('status', '=', 'Aktif')->count();
        $data['jumlah_guru'] = Guru::count();
        $data['jumlah_siswa_1'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',1)
        ->where('siswa.status','Aktif')
        ->count();
        $data['jumlah_siswa_2'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',2)
        ->where('siswa.status','Aktif')
        ->count();
        $data['jumlah_siswa_3'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',3)
        ->where('siswa.status','Aktif')
        ->count();
        $data['jumlah_siswa_4'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',4)
        ->where('siswa.status','Aktif')
        ->count();
        $data['jumlah_siswa_5'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',5)
        ->where('siswa.status','Aktif')
        ->count();
        $data['jumlah_siswa_6'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',6)
        ->where('siswa.status','Aktif')
        ->count();
        return view('Client.beranda',$data);
    }
        
     function showStatistik_siswa(){
        return view('Client.statistik_siswa');
    }
     function showStatistik_guru(){
        $data['list_guru'] = Guru::paginate(2);
        return view('Client.statistik_guru',$data);
    }
    function showSejarah(){
        $data['daftar_sejarah'] = Sejarah::all();
        return view('Client.sejarah',$data);
    }
    function showStruktur(){
        $data['daftar_struktur'] = Struktur::all();
        return view('Client.struktur',$data);
    }
    function showVisi_misi(){
        $data['daftar_visi_misi'] = Visi_misi::all();
        return view('Client.visi_misi',$data);
    }
    function showPrestasi(){
        $data['list_prestasi'] = Prestasi::all();
        return view('Client.prestasi',$data);
    }
    function showKolaborasi(){
        $data['list_kolaborasi'] = Kolaborasi::all();
        return view('Client.kolaborasi',$data);
    }
    function showLomba(){
        $data['list_lomba'] = Lomba::all();
        return view('Client.lomba',$data);
    }
    function showAlumni(){
        $data['list_alumni'] = Siswa::where('status', 'ALUMNI')->get();
        return view('Client.alumni',$data);
    }

    function cariAlumni(){
        $tahun_lulus = request('tahun_lulus');
        $data['list_alumni'] = Siswa::where('status', 'ALUMNI')->where('tahun_lulus', 'like', "%$tahun_lulus%")->get();
        $data['tahun_lulus'] = $tahun_lulus;
        return view('Client.alumni', $data);
    }


    function showSiswakelas_1(){
        $data['list_kelas_all'] = Kelas::where('kelas',1)->get();
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',1)
        ->get();
        $data['list_kelas_edit'] = Kelas::where('kelas',1)->orWhere('kelas',2)->get();
        return view('Client.siswakelas_1',$data);
    }

    function cariKelas1(){
        $data['list_kelas_all'] = Kelas::where('kelas',1)->get();
        $kode = request('kode');
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',1)
        ->where('kode', 'like', "%$kode%")
        ->get();
        $data['kode'] = $kode;
        return view('Client.siswakelas_1', $data);
    }

    function showSiswakelas_2(){
        $data['list_kelas_all'] = Kelas::where('kelas',2)->get();
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',2)
        ->get(); 
        $data['list_kelas_edit'] = Kelas::where('kelas',2)->orWhere('kelas',3)->get();
        return view('Client.siswakelas_2',$data);
    }

    function cariKelas2(){
        $data['list_kelas_all'] = Kelas::where('kelas',2)->get();
        $kode = request('kode');
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',2)
        ->where('kode', 'like', "%$kode%")
        ->get();
        $data['kode'] = $kode;
        return view('Client.siswakelas_2', $data);
    }

    function showSiswakelas_3(){
        $data['list_kelas_all'] = Kelas::where('kelas',3)->get();
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',3)
        ->get(); 
        $data['list_kelas_edit'] = Kelas::where('kelas',3)->orWhere('kelas',4)->get();
        return view('Client.siswakelas_3',$data);
    }

    function cariKelas3(){
        $data['list_kelas_all'] = Kelas::where('kelas',3)->get();
        $kode = request('kode');
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',3)
        ->where('kode', 'like', "%$kode%")
        ->get();
        $data['kode'] = $kode;
        return view('Client.siswakelas_3', $data);
    }

    function showSiswakelas_4(){
        $data['list_kelas_all'] = Kelas::where('kelas',4)->get();
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',4)
        ->get(); 
        $data['list_kelas_edit'] = Kelas::where('kelas',4)->orWhere('kelas',5)->get();
        return view('Client.siswakelas_4',$data);
    }

    function cariKelas4(){
        $data['list_kelas_all'] = Kelas::where('kelas',4)->get();
        $kode = request('kode');
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',4)
        ->where('kode', 'like', "%$kode%")
        ->get();
        $data['kode'] = $kode;
        return view('Client.siswakelas_4', $data);
    }

    function showSiswakelas_5(){
        $data['list_kelas_all'] = Kelas::where('kelas',5)->get();
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',5)
        ->get(); 
        $data['list_kelas_edit'] = Kelas::where('kelas',5)->orWhere('kelas',6)->get();
        return view('Client.siswakelas_5',$data);
    }

    function cariKelas5(){
        $data['list_kelas_all'] = Kelas::where('kelas',5)->get();
        $kode = request('kode');
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',5)
        ->where('kode', 'like', "%$kode%")
        ->get();
        $data['kode'] = $kode;
        return view('Client.siswakelas_5', $data);
    }

    function showSiswakelas_6(){
        $data['list_kelas_all'] = Kelas::where('kelas',6)->get();
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',6)
        ->get();
        $data['list_kelas_edit'] = Kelas::where('kelas',6)->get();
        return view('Client.siswakelas_6',$data);
    }

    function cariKelas6(){
        $data['list_kelas_all'] = Kelas::where('kelas',6)->get();
        $kode = request('kode');
        $data['list_kelas'] = Kelas::select('kelas')
        ->join('siswa','siswa.kelas_id','=','kelas.id')
        ->select('kelas.*','siswa.*','kelas.id as idk','siswa.id as ids')
        ->where('kelas.kelas',6)
        ->where('kode', 'like', "%$kode%")
        ->get();
        $data['kode'] = $kode;
        return view('Client.siswakelas_6', $data);
    }
}
