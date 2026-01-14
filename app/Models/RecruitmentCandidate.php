<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecruitmentCandidate extends Model
{
    public function recruitment()
    {
        return $this->belongsTo(Recruitment::class);
    }
}
