<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('pages.courses.index');
    }

    public function show()
    {
        return view('pages.courses.detail-course');
    }

    public function showLesson()
    {
        return view('pages.courses.lesson');
    }
}
