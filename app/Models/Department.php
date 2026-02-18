<?php

namespace App\Models;

use App\Models\Organization;
use App\Models\Program;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = ['id'];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

    public function program()
    {
        return $this->hasMany(Program::class);
    }
}
