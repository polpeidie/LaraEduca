<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentSubmission extends Model
{
    use HasFactory;

    public function assignment () {
        return $this->belongsTo(Assignment::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function grade () {
        return $this->hasOne(Grade::class);
    }
}
