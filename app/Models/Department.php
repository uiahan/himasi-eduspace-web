<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = ['id'];

    public function organization() {
        return $this->belongsTo(Organization::class);
    }

    public function staff() {
        return $this->hasMany(Staff::class);
    }

    public function program() {
        return $this->hasMany(Program::class);
    }
}
