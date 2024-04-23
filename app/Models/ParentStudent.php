<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentStudent extends Model
{
    use HasFactory;

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function parent_guardian () {
        return $this->belongsTo(ParentGuardian::class);
    }
}
