<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Lomba;
use Illuminate\Support\Str;

class Lomba extends Model
{
    protected $table = 'lomba';
    protected $guard = 'id';
    
    function Lomba(){
        return $this->belongsTo(Lomba::class);
    }
}