<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Group;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

  
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'actif',
    ];
    public function group(){
        return $this->belongsTo(Group::class , 'user_id');
    }

 

}
