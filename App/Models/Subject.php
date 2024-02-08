<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    protected $fillable = [
        "name",
        "Description"
    ];

    public function teachers() :BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function students() :HasMany
    {
      return $this->hasMany(Student::class);
    }
}
