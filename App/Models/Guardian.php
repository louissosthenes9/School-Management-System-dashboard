<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Guardian extends Model
{

    use Notifiable,HasFactory,HasApiTokens;

    protected $fillable = [
        "first_name", "last_name",
         "email",
        "Mobile_number", "password"
    ];

    public function students() :BelongsTo
    {
        return $this->belongsTo(Student::class);
    }



}
