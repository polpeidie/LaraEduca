<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    public function course () {
        return $this->belongsTo(Course::class);
    }

    public function quiz_questions () {
        return $this->hasMany(QuizQuestion::class);
    }
}
