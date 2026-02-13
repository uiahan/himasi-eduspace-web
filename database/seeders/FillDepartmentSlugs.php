<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Department;
use App\Models\Lesson;
use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class FillDepartmentSlugs extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = Department::whereNull('slug')->get();

        foreach ($departments as $department) {
            $slug = Str::slug($department->name);
            $originalSlug = $slug;
            $count = 1;

            // Pastikan slug unik
            while (Department::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $department->slug = $slug;
            $department->save();
        }

        $programs = Program::whereNull('slug')->get();
        foreach ($programs as $program) {
            $slug = Str::slug($program->name);
            $originalSlug = $slug;
            $count = 1;

            // Pastikan slug unik
            while (Program::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $program->slug = $slug;
            $program->save();
        }

        $courses = Course::whereNull('slug')->get();
        foreach ($courses as $course) {
            $slug = Str::slug($course->title);
            $originalSlug = $slug;
            $count = 1;

            // Pastikan slug unik
            while (Course::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $course->slug = $slug;
            $course->save();
        }

        $lessons = Lesson::whereNull('slug')->get();
        foreach ($lessons as $lesson) {
            $slug = Str::slug($lesson->title);
            $originalSlug = $slug;
            $count = 1;

            // Pastikan slug unik
            while (Lesson::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $lesson->slug = $slug;
            $lesson->save();
        }
    }
}
