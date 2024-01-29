<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Guardian extends Model
{

    use Notifiable,HasFactory,HasApiTokens;

    protected $fillable = [
        "first_name", "last_name",
         "relation","email",
        "Mobile-no", "password"
    ];

    public function students() :HasMany
    {
        return $this->hasMany("students","student_id");
    }



}
