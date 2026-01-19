<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecruitmentCandidate extends Model
{
    protected $guarded = ['id'];

    public function recruitment()
    {
        return $this->belongsTo(Recruitment::class);
    }
}
