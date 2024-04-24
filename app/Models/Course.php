<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function teacher () {
        return $this->belongsTo(User::class);
    }

    public function department () {
        return $this->belongsTo(Department::class);
    }

    public function assignments () {
        return $this->hasMany(Assignment::class);
    }

    public function calendar_events () {
        return $this->hasMany(CalendarEvent::class);
    }

    public function course_enrollments () {
        return $this->hasMany(CourseEnrollment::class);
    }
}
