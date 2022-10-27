<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Guru;
use Illuminate\Support\Str;

class Guru extends Model
{
    protected $table = 'Guru';
    protected $guard = 'id';
    
    function Guru(){
        return $this->belongsTo(Guru::class);
    }

    function handleUploadFoto(){
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/Guru";
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
