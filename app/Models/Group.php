<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
    public function users()
    {
        return $this->hasMany(Users::class);
    }

}
