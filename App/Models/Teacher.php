<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Teacher extends authenticatable
{
    use HasFactory,Notifiable,HasApiTokens,HasRoles;

    protected $fillable = [
        "first_name", "last_name",
        "email",
        "Mobile-no", "password"
    ];
}
