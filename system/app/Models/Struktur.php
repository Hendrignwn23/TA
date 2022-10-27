<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Struktur;
use Illuminate\Support\Str;

class Struktur extends Model
{
   
    protected $table = 'struktur';
    protected $guard = 'id';
    
    function handleUploadFile(){
        if(request()->hasFile('file')){
            $file = request()->file('file');
            $destination = "file/struktur";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/".$url;
            $this->save;
        }
    }
    function handleDeleteFile(){
        $file = $this->file;
        return true;
    }
}
