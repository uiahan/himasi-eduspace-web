<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('program.department')->get();
        if (!$courses) {
            return response()->json(['message' => 'No courses found!'], 404);
        }
        return response()->json($courses);
    }

    public function show($id)
    {
        $course = Course::with('program.department')->find($id);
        if (!$course) {
            return response()->json(['message' => 'Course not found!'], 404);
        }
        return response()->json($course);
    }
}
