<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Department;
use App\Models\Organization;
use App\Models\Program;
use App\Models\Staff;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => env('ADMIN_NAME'),
            'email' => env('ADMIN_EMAIL'),
            'password' => bcrypt(env('ADMIN_PASSWORD')),
            'role' => env('ADMIN_ROLE'),
            'phone' => env('ADMIN_PHONE'),
        ]);

    }
}
