<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = ['id'];

    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
