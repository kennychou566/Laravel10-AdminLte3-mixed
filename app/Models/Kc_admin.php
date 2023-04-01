<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Kc_admin extends Model
{
    use HasApiTokens, HasFactory;
    
    protected $guarded = ['id'];
    protected $hidden = ['password'];
    
}
