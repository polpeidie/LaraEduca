<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function activity_logs () {
        return $this->hasMany(ActivityLog::class);
    }

    public function assignment_submissions () {
        return $this->hasMany(AssignmentSubmission::class);
    }

    public function course_enrollments () {
        return $this->hasMany(CourseEnrollment::class);
    }

    public function departments () {
        return $this->hasMany(Department::class);
    }

    public function forum_posts () {
        return $this->hasMany(ForumPost::class);
    }

    public function game_sessions () {
        return $this->hasMany(GameSession::class);
    }

    public function role () {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
