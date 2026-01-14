<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    protected $guarded = ['id'];

    public function recruitmentCandidate() {
        return $this->hasMany(RecruitmentCandidate::class);
    }
}
