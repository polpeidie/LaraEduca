<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    public function course () {
        return $this->belongsTo(Course::class);
    }

    public function assignment_submissions () {
        return $this->hasMany(AssignmentSubmission::class);
    }
}
