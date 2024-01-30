<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Teacher extends authenticatable
{
    use HasFactory,Notifiable,HasApiTokens;

    protected $fillable = [
        "first_name", "last_name",
        "email",
        "Mobile-no", "password"
    ];
}
