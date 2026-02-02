<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'link',
        'image',
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}

