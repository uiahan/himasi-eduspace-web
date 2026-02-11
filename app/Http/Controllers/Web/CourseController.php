<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $search = request('search');
        $courses = Course::withCount('lessons')
            ->where('is_active', true)
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%');
            })
            ->paginate(6);
        return view('pages.courses.index', compact('courses'));
    }

    public function show(Course $course)
    {
        return view('pages.courses.detail-course', compact('course'));
    }

    public function showLesson(Course $course, Lesson $lesson)
    {
        $totalLessons = $course->lessons()->count();

        $currentLessonNumber = $course->lessons()
            ->where('id', '<=', $lesson->id)
            ->count();

        $prevLesson = $course->lessons()
            ->where('id', '<', $lesson->id)
            ->orderBy('id', 'desc')
            ->first();

        $nextLesson = $course->lessons()
            ->where('id', '>', $lesson->id)
            ->orderBy('id', 'asc')
            ->first();

        return view('pages.courses.lesson', compact(
            'course',
            'lesson',
            'totalLessons',
            'currentLessonNumber',
            'prevLesson',
            'nextLesson'
        ));
    }
}
