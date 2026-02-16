<?php

namespace App\Models;

use App\Models\Lesson;
use App\Models\Task;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
