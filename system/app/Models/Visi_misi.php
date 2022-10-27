<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Visi_misi;
use Illuminate\Support\Str;

class Visi_misi extends Model
{
   
    protected $table = 'visi_misi';
    protected $guard = 'id';
    
    function handleUploadFile(){
        if(request()->hasFile('file')){
            $file = request()->file('file');
            $destination = "file/visi_misi";
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
