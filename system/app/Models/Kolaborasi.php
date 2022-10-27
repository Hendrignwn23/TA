<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Kolaborasi;
use Illuminate\Support\Str;

class Kolaborasi extends Model
{
    protected $table = 'kolaborasi';
    protected $guard = 'id';
    
    function Kolaborasi(){
        return $this->belongsTo(Kolaborasi::class);
    }
}