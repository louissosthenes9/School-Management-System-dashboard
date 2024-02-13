<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class Student extends Authenticatable{

    use HasApiTokens, Notifiable, HasFactory, HasRoles;
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public $fillable = [
        "first_name", "middle_name",
        "last_name", "sex",
        "birth_day", "email",
        "Mobile-no", "password",
        "passportUrl", "Academic_year"
    ];


    public function guardians() :HasOne
    {
        return $this->hasOne(Guardian::class);
    }
    public function subjects() :BelongsToMany
    {
        return $this->belongsToMany(Subject::class)->withPivot('student_subjects');
    }

}
