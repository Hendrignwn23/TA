<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Kelas;
use Illuminate\Support\Str;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $guard = 'id';
    
    function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    function handleUploadFoto(){
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/siswa";
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
