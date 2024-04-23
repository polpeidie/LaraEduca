<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameSession extends Model
{
    use HasFactory;

    public function educational_game () {
        return $this->belongsTo(EducationalGame::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }
}
