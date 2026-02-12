<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Department;
use App\Models\Gallery;
use App\Models\Organization;
use App\Models\Program;
use App\Models\Staff;
use App\Models\Task;
use App\Models\Lesson;
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
        // Additional dummy data
        // Organization -> Departments -> Programs, Staff
        $org = Organization::create([
            'name' => 'HIMASI Eduspace',
            'logo' => 'logo-kabinet/01KH0TEZJ8HC1DS81CJ59PG7F5.png',
            'about' => 'Organization for educational resources and community',
            'vision' => 'Create accessible education',
            'mission' => 'Provide quality learning and community programs',
        ]);


        // Create 5 departments, each with 5 programs and 5 staff
        $departmentNames = [
            'Computer Science',
            'Design',
            'Business',
            'Mathematics',
            'Physics',
        ];
        $departments = [];
        foreach ($departmentNames as $i => $name) {
            $dept = Department::create([
                'logo' => "logo-kabinet/01KH0TEZJ8HC1DS81CJ59PG7F5.png",
                'name' => $name,
                'about' => "$name department about section.",
                'vision' => "Vision for $name.",
                'mision' => "Mission for $name.",
                'organization_id' => $org->id,
            ]);
            $departments[] = $dept;

            // 5 programs per department
            for ($j = 1; $j <= 5; $j++) {
                Program::create([
                    'name' => "$name Program $j",
                    'photo' => 'logo-kabinet/01KH0TEZJ8HC1DS81CJ59PG7F5.png',
                    'background' => "Background for $name Program $j.",
                    'activity' => "Activities for $name Program $j.",
                    'description' => "Description for $name Program $j.",
                    'location' => 'Main Campus',
                    'date' => now()->addDays($j)->toDateString(),
                    'department_id' => $dept->id,
                ]);
            }

            // 5 staff per department
            for ($k = 1; $k <= 5; $k++) {
                Staff::create([
                    'photo' => "logo-kabinet/01KH0TEZJ8HC1DS81CJ59PG7F5.png",
                    'name' => "$name Staff $k",
                    'position' => "Position $k",
                    'department_id' => $dept->id,
                ]);
            }
        }
        // Courses -> Lessons -> Tasks (tasks require users and courses)
        // $courses = [
        //     [
        //         'title' => 'Laravel Basics',
        //         'description' => 'Learn the basics of Laravel framework',
        //     ],
        //     [
        //         'title' => 'PHP Fundamentals',
        //         'description' => 'Master the fundamentals of PHP programming',
        //     ],
        //     [
        //         'title' => 'Web Design',
        //         'description' => 'Introduction to modern web design principles',
        //     ],
        // ];

        // $courseModels = [];
        // foreach ($courses as $courseData) {
        //     $courseModels[] = Course::create([
        //         'title' => $courseData['title'],
        //         'thumbnail' => 'logo-kabinet/01KH0TEZJ8HC1DS81CJ59PG7F5.png',
        //         'description' => $courseData['description'],
        //         'is_active' => true,
        //     ]);
        // }

        // // Create lessons for each course
        // foreach ($courseModels as $course) {
        //     for ($i = 1; $i <= 3; $i++) {
        //         Lesson::create([
        //             'course_id' => $course->id,
        //             'title' => "{$course->title} Lesson $i",
        //             'content' => "Content for {$course->title} Lesson $i.",
        //             'url_video' => null,
        //         ]);
        //     }
        // }

        // create a few users via factory for demo students
        // $students = User::factory()->count(10)->create();

        // // create tasks (submissions) for each student and each course
        // foreach ($students as $student) {
        //     foreach ($courseModels as $course) {
        //         Task::create([
        //             'course_id' => $course->id,
        //             'user_id' => $student->id,
        //             'url_submission' => "https://example.com/submission/{$student->id}-{$course->id}",
        //             'description' => "Assignment submission for {$course->title} by {$student->name}",
        //         ]);
        //     }
        // }

        // Create 10 gallery entries
        for ($i = 1; $i <= 10; $i++) {
            Gallery::create([
                'photo' => 'logo-kabinet/01KH0TEZJ8HC1DS81CJ59PG7F5.png',
                'desc' => "Description for Gallery " . $i,
            ]);
        }
    }
}
