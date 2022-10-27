<?php

namespace App\Models;
use App\Models\Siswa;
use Illuminate\Support\Str;

class Kelas extends Model{
    protected $table = 'kelas';


    function siswa(){
        return $this->hasMany(Siswa::class, 'kelas_id');
    }

    function handleUploadFoto(){
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/pesanan";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save;
        }
    }
    function handleDeleteFoto(){
        $foto = $this->foto;
        return true;
    }
}