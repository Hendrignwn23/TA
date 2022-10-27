<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Prestasi;
use Illuminate\Support\Str;

class Prestasi extends Model
{
    protected $table = 'Prestasi';
    protected $guard = 'id';
    
    function Prestasi(){
        return $this->belongsTo(Prestasi::class);
    }
}
