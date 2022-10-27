<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Sejarah;
use Illuminate\Support\Str;

class Sejarah extends Model
{
   
    protected $table = 'sejarah';
    protected $guard = 'id';
    
    function handleUploadFile(){
        if(request()->hasFile('file')){
            $file = request()->file('file');
            $destination = "file/sejarah";
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
