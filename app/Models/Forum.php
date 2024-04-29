<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    public function course () {
        return $this->belongsTo(Course::class);
    }

    public function forum_posts () {
        return $this->hasMany(ForumPost::class);
    }
}
